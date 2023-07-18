<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->session()->get('user')) return redirect()->route('adminHome');
        return view('dashboard.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            "email" => "required|email:rfc,dns|max:255",
            "password" => "required|max:70"
        ]);
        $user = User::where("mail", $request->email)->first();
        if(!$user) return back()->withErrors(["email" => "The email or/and password is incorrect"]);
        if (!Hash::check($request->password, $user->password)) return back()->withErrors(["password" => "The email or/and password is incorrect"])->withInput();
        $token = Str::random(128);
        $user->connection_token = Crypt::encryptString($token);
        $user->last_ip = Crypt::encryptString($request->ip());
        $user->save();
        $request->session()->put("user", ["email" => $request->email, "admin" => $user->admin, "connection_token" => $token]);
        if ($user->admin) return redirect()->route('adminHome')->with("alert-success", "You are now connected as " . $user->username);
        return redirect()->route('publicHome')->with("alert-success", "You are now connected as ".$user->username);
    }

    public function logout(Request $request)
    {
        if (!$request->session()->get('user')) return abort(404);
        $request->session()->forget('user');
        return redirect()->route('publicHome')->with("alert-success", "You have been disconnected!");
    }
}


/**
 * User::create([
 *          "username" => "test",
 *          "mail" => "diofun619@gmail.com",
 *          "password" => Hash::make('zbeub'),
 *          "last_ip" => Crypt::encryptString($_SERVER["REMOTE_ADDR"])
 *     ]);
 */