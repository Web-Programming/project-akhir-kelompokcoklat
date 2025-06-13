<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminAuth;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\Register;
use App\Models\Testi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin.auth')->except(['checkNewOrders']);
    // }

    public function index()
    {
        try {
            $jumlahKategori = Kategori::count();
            $jumlahProduk = Produk::count();
            $jumlahPesanan = Pesanan::count();
            return view('admin.index', compact('jumlahKategori', 'jumlahProduk', 'jumlahPesanan'));
        } catch (\Exception $e) {
            Log::error('Error in index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat dashboard.');
        }
    }

    public function produk(Request $request)
    {
        try {
            $search = $request->input('search', '');
            $query = Produk::query();
            if ($search) {
                $query->where('nama', 'like', "%{$search}%");
            }
            $products = $query->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
                ->select('produk.*', 'kategori.nama as nama_kategori')
                ->orderBy('produk.nama')
                ->paginate(20);
            $jumlahProduk = $products->total();
            return view('admin.produk', compact('products', 'jumlahProduk', 'search'));
        } catch (\Exception $e) {
            Log::error('Error in produk: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat daftar produk.');
        }
    }

    // Pastikan method ini ada
    public function tambahProduk()
    {
        try {
            $kategori = Kategori::all();
            return view('admin.tambah_produk', compact('kategori'));
        } catch (\Exception $e) {
            Log::error('Error in tambahProduk: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat halaman tambah produk.');
        }
    }

    public function produkStore(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'kategori' => 'required|exists:kategori,id',
                'harga' => 'required|numeric|min:0',
                'foto' => 'required|image|max:500000',
                'detail' => 'nullable|string',
                'ketersediaan_stok' => 'required|in:Tersedia,Habis',
            ]);

            $randomName = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $extension = $file->getClientOriginalExtension();
                $randomName = Str::random(20) . '.' . $extension;
                $file->move(public_path('foto'), $randomName);
            }

            Produk::create([
                'kategori_id' => $request->kategori,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'foto' => $randomName,
                'detail' => $request->detail,
                'ketersediaan_stok' => $request->ketersediaan_stok,
            ]);

            return redirect()->route('admin.produk')->with('success', 'Produk berhasil disimpan!');
        } catch (\Exception $e) {
            Log::error('Error in produkStore: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan produk.')->withInput();
        }
    }

    public function produkEdit($id)
    {
        try {
            $produk = Produk::findOrFail($id);
            $kategori = Kategori::where('id', '!=', $produk->kategori_id)->get();
            return view('admin.edit_produk', compact('produk', 'kategori'));
        } catch (\Exception $e) {
            Log::error('Error in produkEdit: ' . $e->getMessage());
            return redirect()->route('admin.produk')->with('error', 'Produk tidak ditemukan.');
        }
    }

    public function produkUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'kategori' => 'required|exists:kategori,id',
                'harga' => 'required|numeric|min:0',
                'foto' => 'nullable|image|max:500000',
                'detail' => 'nullable|string',
                'ketersediaan_stok' => 'required|in:Tersedia,Habis',
            ]);

            $produk = Produk::findOrFail($id);
            $produk->nama = $request->nama;
            $produk->kategori_id = $request->kategori;
            $produk->harga = $request->harga;
            $produk->detail = $request->detail;
            $produk->ketersediaan_stok = $request->ketersediaan_stok;

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $extension = $file->getClientOriginalExtension();
                $randomName = Str::random(20) . '.' . $extension;
                $file->move(public_path('foto'), $randomName);
                $produk->foto = $randomName;
            }

            $produk->save();
            return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Error in produkUpdate: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui produk.')->withInput();
        }
    }

    public function produkDestroy($id)
    {
        try {
            $produk = Produk::find($id);

            if (!$produk) {
                return redirect()->route('admin.produk')->with('error', 'Produk tidak ditemukan');
            }

            // Hapus file foto jika ada
            if ($produk->foto && file_exists(public_path('foto/' . $produk->foto))) {
                unlink(public_path('foto/' . $produk->foto));
            }

            $produk->delete();

            return redirect()->route('admin.produk')->with('message', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.produk')->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    public function pesanan()
    {
        try {
            $pemesanan = Pesanan::with('produk')->orderBy('tanggal_pemesanan', 'desc')->paginate(10);
            return view('admin.pesanan', compact('pemesanan'));
        } catch (\Exception $e) {
            Log::error('Error in pesanan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat daftar pesanan.');
        }
    }

    public function pesananUpdate(Request $request, $id)
    {
        try {
            $pesanan = Pesanan::findOrFail($id);
            $validStatuses = ['Pending', 'Terkirim', 'Dibatalkan', 'Selesai'];
            $request->validate([
                'status' => 'required|in:' . implode(',', $validStatuses),
            ]);
            $pesanan->status = $request->status;
            $pesanan->save();
            return redirect()->route('admin.pesanan')->with('success', 'Status pesanan berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Error in pesananUpdate: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui status pesanan.');
        }
    }

    public function kategori()
    {
        try {
            $kategori = Kategori::all();
            return view('admin.kategori', compact('kategori'));
        } catch (\Exception $e) {
            Log::error('Error in kategori: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat daftar kategori.');
        }
    }

    public function kategoriStore(Request $request)
    {
        try {
            $request->validate([
                'kategori' => 'required|string|max:255|unique:kategori,nama',
            ]);

            $kategori = Kategori::create(['nama' => $request->kategori]);
            if ($kategori) {
                return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil disimpan!');
            }
            return back()->with('error', 'Gagal menyimpan kategori.');
        } catch (\Exception $e) {
            Log::error('Error in kategoriStore: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan kategori.');
        }
    }

    public function kategoriDetail($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            return view('admin.kategori-detail', compact('kategori'));
        } catch (\Exception $e) {
            Log::error('Error in kategoriDetail: ' . $e->getMessage());
            return redirect()->route('admin.kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    }

    public function kategoriUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'kategori' => 'required|string|max:255|unique:kategori,nama,' . $id,
            ]);

            $kategori = Kategori::findOrFail($id);
            if ($kategori->nama == $request->kategori) {
                return redirect()->route('admin.kategori');
            }

            $kategori->nama = $request->kategori;
            $kategori->save();
            return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diupdate!');
        } catch (\Exception $e) {
            Log::error('Error in kategoriUpdate: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui kategori.');
        }
    }

    public function kategoriDestroy($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $productCount = $kategori->produk()->count();
            if ($productCount > 0) {
                return back()->with('error', 'Kategori tidak dapat dihapus karena sudah digunakan di ' . $productCount . ' produk!');
            }
            $kategori->delete();
            return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Error in kategoriDestroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus kategori.');
        }
    }

    public function testi()
    {
        try {
            $testimoni = Testi::orderBy('id', 'desc')->paginate(10);
            return view('admin.testi', compact('testimoni'));
        } catch (\Exception $e) {
            Log::error('Error in testi: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat daftar testimoni.');
        }
    }

    public function testiDelete(Request $request)
    {
        try {
            $id = $request->input('delete_id');
            $testi = Testi::findOrFail($id);
            $testi->delete();
            return response()->json(['success' => true, 'message' => 'Testimoni berhasil dihapus!']);
        } catch (\Exception $e) {
            Log::error('Error in testiDelete: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Gagal menghapus testimoni!'], 500);
        }
    }

    public function user()
    {
        try {
            $users = Register::all();
            return view('admin.user', compact('users'));
        } catch (\Exception $e) {
            Log::error('Error in user: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memuat daftar pengguna.');
        }
    }

    public function userDestroy($id)
    {
        try {
            $user = Register::findOrFail($id);
            $user->delete();
            return redirect()->route('admin.user')->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Error in userDestroy: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus pengguna.');
        }
    }

    public function checkNewOrders()
    {
        try {
            $pesanan_baru = Pesanan::where('status', 'Belum Diproses')->count() > 0;
            return response()->json(['new_order' => $pesanan_baru]);
        } catch (\Exception $e) {
            Log::error('Error in checkNewOrders: ' . $e->getMessage());
            return response()->json(['new_order' => false], 500);
        }
    }
}
