<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('produk')
            ->select('produk.*', 'kategori.nama as kategori_nama')
            ->leftJoin('kategori', 'produk.kategori_id', '=', 'kategori.id')
            ->where('ketersediaan_stok', 'tersedia');

        // Handle search
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('produk.nama', 'like', "%{$search}%");
        }

        // Handle category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('kategori_id', $request->category);
        }

        $products = $query->get();

        $categories = DB::table('kategori')->get();

        return view('products', compact('products', 'categories'));
    }
    public function category($slug)
    {
        $categories = DB::table('kategori')->get();
        $category = $categories->first(function($cat) use ($slug) {
            return strtolower(str_replace(' ', '-', $cat->nama)) === $slug;
        });

        if (!$category) {
            abort(404);
        }

        $products = DB::table('produk')
            ->select('id', 'nama', 'harga', 'foto', 'ketersediaan_stok')
            ->where('kategori_id', $category->id)
            ->where('ketersediaan_stok', 'tersedia')
            ->get();

        return view('products', [
            'category' => $category,
            'products' => $products,
            'categories' => $categories
]);
}
}