<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use App\Models\About;
use App\Models\Admin;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function show(){
        $msg= Message::all();
        return view('admin',compact('msg'));
    }
    
    public function storeImages(Request $request){
        $this->validate($request,[
            "name"=>"required",
            "type"=>"required",
            "image"=>"required"
        ]);

        $name= $request->image->getClientOriginalExtension();
        $imageName= time().'.'.$name;


        $request->image->move(public_path('images'),$imageName);

        $store= new Admin();
        $store->name=$request->name;
        $store->typeImg=$request->type;
        $store->imageFile= ($imageName);
        $store->save();
        
        return redirect()->route('adminDisplay');
    }

    public function adminShow(){
        $showImage= Admin::all();
        $showAbout= About::all();
        $showVisa= Visa::all();
        return view('adminDisplay',compact('showImage', 'showAbout', 'showVisa'));
    }
    public function destroyImg($id){
        $admin=Admin::find($id);
        $image= $admin->imageFile;
        // $image_path=public_path('images');
        // dd($image_path); 
        // $image_path= 'public\images\\'.$image;   
        $image_path= 'images/'.$image;   
        // dd($image_path);
        // if(file_exists($image_path)){
        //     return 'file found';
        // }
        // else{
        //     return 'file not found';
        // }
        //  public\images\1616168275.jpg    public\images\1616168275.jpg
        // dd($image_path);
        // file::delete(public_path(asset('images').$admin->imagFile)); 
    //    dd( public_path('images/'.$admin->imageFile));
        file::delete($image_path);
        $admin->delete();
        return back();
    }
    public function delvisaimage($id){
        $visa=Visa::find($id);
        $image= $visa->imgfile;
        $image_path= 'images/'.$image;   
     
        file::delete($image_path);
        $visa->delete();
        return back();
    }
    public function delabout($id){
        $about=About::find($id);
        $image= $about->imgfile;
        $image_path= 'images/'.$image;   
     
        file::delete($image_path);
        $about->delete();
        return back();
    }
}
