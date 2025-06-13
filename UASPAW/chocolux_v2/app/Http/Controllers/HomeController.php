<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Get categories from database
        $categories = DB::table('kategori')
            ->select('id', 'nama')
            ->get()
            ->map(function($category) {
                // Map specific images to category names
                $image = match($category->nama) {
                    'Silver queen' => 'logo1.gif',
                    'toblerone' => 'logo4.png',
                    'Ferrero Rocher' => 'logo3.jpeg',
                    'KitKat' => 'logo5.jpg',
                    'Dairy Milk' => 'logo2.png',
                    default => 'default.png' // Default image if no match
                };

                return (object)[
                    'nama' => $category->nama,
                    'slug' => strtolower(str_replace(' ', '-', $category->nama)),
                    'image' => $image
                ];
            });


        // // Get featured products (limit to 6 for homepage)
        $products = DB::table('produk')
            ->select('id', 'nama', 'harga', 'foto')
            ->where('ketersediaan_stok', 'tersedia')
            ->limit(6)
            ->get()
            ->map(function($product) {
                return (object)[
                    'id' => $product->id,
                    'nama' => $product->nama,
                    'harga' => $product->harga,
                    'foto' => $product->foto
                ];
            });

        // Get testimonials
        $testimonials = DB::table('testi')
            ->select('name', 'message')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('index', compact('categories', 'products', 'testimonials'));
    }
}
