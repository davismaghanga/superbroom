<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Notifications\MessageSent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function postMessage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email_address'=>'email',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        else{
            $message = new Message();
            $message->full_name = $request->fullname;
            $message->email = $request->email_address;
            $message->message_body = $request->message;
            $message->save();
            $user = User::find(1);
            $user->notify(new MessageSent($message));
            return response()->json([
                'success',
                'message'=>$message,
                'user'=>$user
            ]);
        }

    }

    public function viewMessages()
    {
        $messages = Message::all();
        return view('admin.messages',compact('messages'));
    }

    public function deleteMessage(Message $message)
    {
        $message->delete();
        return response()->json('success',200);
    }
}
