<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    public function index()
    {
        // Ambil data testimonial dari database
        $testimonials = DB::table('testi')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('testimonials', compact('testimonials'));
    }
}
