<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Register::where('email', $request->email)->first();
        if ($user && password_verify($request->password, $user->password)) {
            Session::put('email', $user->email);
            Session::put('login', true);
            return redirect()->route('admin.index');
        } else {
            return back()->with('error', $user ? 'Password salah' : 'Akun tidak tersedia');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:register,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new Register();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();

        return redirect()->route('login')->with('success', 'You are registered successfully.');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
