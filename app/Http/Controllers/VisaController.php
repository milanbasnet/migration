<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function storeVisa(Request $request){
        $name=$request->image->getClientOriginalExtension();
        $imagename=time().'.'.$name;
        $request->image->move(public_path('images'),$imagename);

        $store= new Visa();
        $store->boxnumber=$request->boxnumber;
        $store->title=$request->title;
        $store->content=$request->content;
        $store->imgfile=($imagename);
        $store->save();

        return redirect()->route('adminDisplay');
    }
    public function displayedvisa($id){
        $edit= Visa::findOrFail ($id);
        // $store->image_path = json_encode($datas)
        return view('edit.visaedit')->with('posts', $edit);
    }
    public function visaupdate(Request $request, $id){
        $this->validate($request,[
            "boxnumber"=>"required",
            "title"=>"required",
            "content"=>"required",
            "imgfile"=>"required",
        ]);

        $name=$request->image->getClientOriginalExtension();
        $imageName=time().'.'.$name;
        $request->image->move(public_path('images'),$imageName);

        $store=new Visa();
        $store->boxnumber=$request->image;
        $store->title=$request->title;
        $store->content=$request->content;
        $store->imgfile=$imageName;
        $store->save();

        return redirect()->route('adminDisplay');
    }
}
