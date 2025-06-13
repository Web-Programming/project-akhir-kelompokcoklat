<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private function checkLogin()
    {
        if (!Session::has('is_logged_in')) {
            return redirect()->route('login')->with('error', 'Please login first');
        }
        return null;
    }

    public function index()
    {
        if ($redirect = $this->checkLogin()) return $redirect;

        $cart = Session::get('cart', []);
        $cartItems = [];
        $grandTotal = 0;

        foreach ($cart as $id => $details) {
            $product = DB::table('produk')->where('id', $id)->first();
            if ($product) {
                $cartItems[] = (object)[
                    'id' => $id,
                    'name' => $product->nama,
                    'price' => $product->harga,
                    'quantity' => $details['quantity'],
                    'photo' => $product->foto
                ];
                $grandTotal += $product->harga * $details['quantity'];
            }
        }

        return view('keranjang', compact('cartItems', 'grandTotal'));
    }

    public function add(Request $request)
    {
        if ($redirect = $this->checkLogin()) return $redirect;

        $productId = $request->product_id;
        $quantity = $request->quantity ?? 1;

        $product = DB::table('produk')->where('id', $productId)->first();
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'quantity' => $quantity
            ];
        }

        Session::put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
        {
            if ($redirect = $this->checkLogin()) return $redirect;

            if ($request->quantity) {
                $cart = Session::get('cart', []);

                foreach ($cart as $index => $item) {
                    $productId = $item['id'];

                    if (isset($request->quantity[$productId])) {
                        $newQty = (int) $request->quantity[$productId];

                        if ($newQty > 0) {
                            // Ambil harga terbaru dari database
                            $product = \App\Models\Product::find($productId);

                            if ($product) {
                                $cart[$index]['quantity'] = $newQty;
                                $cart[$index]['price'] = $product->price; // ⬅️ update harga
                            }
                        } else {
                            unset($cart[$index]);
                        }
                    }
                }

                Session::put('cart', array_values($cart));
            }

            return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
        }


public function remove($id)
{
   dd(Session::get('cart'));
}


    public function checkout()
    {
        if ($redirect = $this->checkLogin()) return $redirect;

        if (!Session::has('cart') || empty(Session::get('cart'))) {
            return redirect()->route('products.index')->with('error', 'Keranjang Anda kosong!');
        }

        $cart = Session::get('cart', []);
        $cartItems = [];
        $grandTotal = 0;

        foreach ($cart as $id => $details) {
            $product = DB::table('produk')->where('id', $id)->first();
            if ($product) {
                $cartItems[] = (object)[
                    'id' => $id,
                    'name' => $product->nama,
                    'price' => $product->harga,
                    'quantity' => $details['quantity'],
                    'photo' => $product->foto,
                    'subtotal' => $product->harga * $details['quantity']
                ];
                $grandTotal += $product->harga * $details['quantity'];
            }
        }

        return view('form', compact('cartItems', 'grandTotal'));
    }

    public function processCheckout(Request $request)
    {
        if ($redirect = $this->checkLogin()) return $redirect;

        $cart = Session::get('cart', []);
        if (empty($cart)) {
            return redirect()->route('products.index')
                ->with('error', 'Keranjang Anda kosong!');
        }

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'metode_pembayaran' => 'required'
        ]);

        $totalHarga = 0;
        foreach ($cart as $productId => $details) {
            $product = DB::table('produk')->where('id', $productId)->first();
            $totalHarga += $product->harga * $details['quantity'];
        }

        $orderId = DB::table('pesanan')->insertGetId([
            'produk_id' => array_key_first($cart),
            'nama' => $request->nama,
            'email' => $request->email,
            'jumlah' => array_sum(array_column($cart, 'quantity')),
            'total_harga' => $totalHarga,
            'tanggal_pemesanan' => now(),
            'status' => 'Pending',
            'alamat_pengiriman' => $request->alamat,
            'metode_pembayaran' => $request->metode_pembayaran,
            'user_id' => Session::get('user_id', 0)
        ]);

        Session::forget('cart');

        return redirect()->route('products.index')
            ->with('success', 'Pesanan Anda berhasil diproses!');
    }
}
