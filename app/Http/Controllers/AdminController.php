<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function about()
    {
        $abouts = About::all();
        return view('dashboard.about', ["abouts" => $abouts->toArray()]);
    }

    public function aboutNew()
    {
        return view('dashboard.aboutNew');
    }

    public function aboutNewSend(Request $request)
    {
        $request->validate([
            "title" => 'required|max:50|string',
            "type" => 'required|integer|gt:0|lte:5',
            "start" => 'nullable|date|required_with:end', // regex:/[0-9]{4}\-((0[1-9])|(1[12]))\-(([12][0-9])|(0[1-9])|(3[0-1]))/
            "end" => 'nullable|date|after:start|',
            "image" => 'nullable|mimetypes:image/jpeg,image/png,image/gif',
            "shortDesc" => 'required|string|max:65535',
            "editor" => 'nullable|string|max:4294967295|not_regex:/\<script[\s\S]*\>/gi'
        ]);
        $new = $request->all();
        $new['title'] = htmlspecialchars($new['title']);
        $new['shortDesc'] = htmlspecialchars($new['shortDesc']);
        if ($request->file('image') && $request->file('image')->isValid()) $path = $request->file('image')->store('abouts');
        else $path = null;
        $date = $new['start'] && $new['end'] ? $new['start']." // ".$new['end'] : $new['start'];
        $about = About::create([
            "type" => $new['type'],
            "title" => $new['title'],
            "short_desc" => $new['shortDesc'],
            "long_desc" => $new['editor'],
            "img_path" => $path ? $path : null,
            "date" => $date
        ]);
        return redirect()->route('adminAbout')->with("alert-success", "New element has been added to about page! (".$new['title'].")");
    }

    public function messages()
    {
        $messages = Message::all();
        $messages->map(function ($message) {
            $message->name = Crypt::decryptString($message->name);
            $message->message = Crypt::decryptString($message->message);
            $message->ip = Crypt::decryptString($message->ip);
        });
        return view('dashboard.messages', ["messages" => $messages->toArray()]);
    }

    public function message($id)
    {
        $message = Message::findOrFail($id);
        $message->name = Crypt::decryptString($message->name);
        $message->message = Crypt::decryptString($message->message);
        $message->ip = Crypt::decryptString($message->ip);
        return view('dashboard.messageView', ["message" => $message->toArray()]);
    }

    public function messagesDelete($id) 
    {
        $message = Message::where("id", $id)->firstOrfail()->delete();
        return redirect()->back()->with('alert-success', "The message has been deleted!");
    }
}
