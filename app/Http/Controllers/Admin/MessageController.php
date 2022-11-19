<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages=Message::get();
        return view('admin.pages.message.index',compact('messages'));
    }

    public function edit($id)
    {
        $message=Message::findOrFail($id);
        if($message->seen_message===null)
        {
            $message->seen_message=now()->addHours(4);
            $message->save();
        }
        return view('admin.pages.message.edit',compact('message'));
    }
    
    public function destroy($id)
    {
        $message=Message::findOrFail($id);
        $message->delete();
        toastr()->success('Mesajınız uğurla silindi');
        return redirect()->route('admin.message');
    }
}
