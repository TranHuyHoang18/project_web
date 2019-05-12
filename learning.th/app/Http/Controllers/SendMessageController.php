<?php

namespace App\Http\Controllers;

use App\Model\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class SendMessageController extends Controller
{
    public function index()
    {
        return view('send_message');
    }
    public function sendMessage(Request $request)
    {
        $name = Auth::user()->name;
        $id=  Auth::id();
        $request->validate([
            'content' => 'required'
        ]);
        
        $data['name'] = $name;
        $data['content'] = $request->input('content');
        $data['id_room'] = $request['id_room'];
        $id_room = $request['id_room'];
        $item = new Message();
        $item->name = $name;
        $item->content = $data['content'];
        $item->id_room = $id_room;
        $item->save();
        
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        
        $pusher->trigger('Message', 'send-message', $data);
        
        return redirect( url('/room/detail/'.$id_room));
    }
}
