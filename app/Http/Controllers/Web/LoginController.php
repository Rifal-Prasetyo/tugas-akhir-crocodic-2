<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginPage()
    {
        $site = [
            'title' => 'Selamat Datang |' . config('app.name'),
            'description' => config('app.description')

        ];

        return view('login', compact('site'));
    }

    public function loginAction(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            $setting = Setting::all()->toArray();
            $request->session()->put('settings', [$setting]);

            return redirect()->intended('home')->with('message', ['type' => 'success_info', 'msg' => "Login Berhasil"]);
        }

        return back()->with('message', ['type' => 'danger_info', 'msg' => "Periksa kembali Username atau Sandi Anda"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', ['type' => 'danger_info', 'msg' => "Berhasil Logout"]);
    }
}
