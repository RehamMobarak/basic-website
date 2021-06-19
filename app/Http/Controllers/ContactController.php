<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // dd($request->input('name'));
        // return 123;
        $message = new Message();
        // -> DB fields name == -> input names
        $message->Name = $request->input('name');
        $message->Subject = $request->input('subject');
        $message->Email = $request->input('email');
        $message->Message = $request->input('message');
        $message->save();
        return redirect()->route('home')->with('success', 'Message succefuly sent! Thank you');
    }


    public function getMessages()
    {
        $messages = Message::all();
        return view('messages',['messages' =>$messages]);
    }
}
