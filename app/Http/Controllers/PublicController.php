<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\App;

class PublicController extends Controller
{
    public function home() 
    {
        return view('pages.home');
    }

    public function contact(Request $request)
    {
        return view('pages.contact');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            "name" => "required|alpha|max:35",
            "email" => "required|email:rfc,dns|max:255",
            "message" => "required",
            "gdpr" => "accepted"
        ]);
        $message = Message::create([
            "name" => Crypt::encryptString(htmlspecialchars($request->name)),
            "mail" => htmlspecialchars($request->email),
            "message" => Crypt::encryptString(htmlspecialchars($request->message)),
            "ip" => Crypt::encryptString($_SERVER['REMOTE_ADDR']),
            "confirmation_token" => Str::random(32)
        ]);
        return redirect()->route('publicContact')->with("alert-success", "Your message has been sent! Please confirm your email address by clicking on the link sent by email!");
    }

    public function contactConfirm($email, $token)
    {
        $message = Message::where([
            "mail" => $email,
            "confirmed" => false,
            "confirmation_token" => $token
        ])->firstOrFail();
        $message->update([
            "confirmation_token" => null,
            "confirmed" => true
        ]);
        return redirect()->route('publicHome')->with('alert-success', "Your email address has been confirmed!");
    }
}