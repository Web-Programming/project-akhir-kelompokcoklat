<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        try {
            DB::table('testi')->insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'created_at' => now()
            ]);

            return redirect()->route('testimonials')
                ->with('success', 'Thank you for your testimonial! Your message has been saved.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to submit message. Please try again.')
                ->withInput();
        }
    }
}
