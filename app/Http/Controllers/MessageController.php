<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // public function index(){
    //     return view('message');
    // }

    public function messageStore(Request $request){
        $this->validate($request,[
            'message'=>'required'
        ]);
        $store= new Message();
        $store->message=$request->message;
        $store->save();
        return redirect()->route('home');
    }
}
