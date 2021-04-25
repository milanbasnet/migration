<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function storeAbout(Request $request){
        $name= $request->image->getClientOriginalExtension();
        $aboutimageName=time().'.'.$name;
        $request->image->move(public_path('images'),$aboutimageName);

        $store= new About();
        $store->title=$request->title;
        $store->paragraph=$request->paragraph;
        $store->imgfile=($aboutimageName);
        $store->save();
        return redirect()->route('adminDisplay');
    }
    // public function showAbout(){
    //     $showAbout= About:: all();
    //     return view('adminDisplay',compact('showAbout'));
    // }

    public function displayEdit($id)
    {
        $edit= About::findOrFail ($id);
        // $store->image_path = json_encode($datas)
        return view('edit.aboutedit')->with('posts', $edit);
    }

    public function updateAbout(Request $request, $id){
        $this->validate($request, [
            'title'=>"required",
            'paragraph'=>"required",
            'imgFile'=> "nullable|mimes:jpeg,bmp,png,jpg"
        ]);
        
        $name= $request->image->getClientOriginalExtension();
        $aboutimageName=time().'.'.$name;
        $request->image->move(public_path('images'),$aboutimageName);

        $store= About::find($id);
        $store->title=$request->title;
        $store->paragraph=$request->paragraph;
        $store->imgfile=($aboutimageName);
        $store->save();
        return redirect()->route('adminDisplay');
    }
    public function destroy($id){
        $item= About::find($id);
        $item->delete();
        return back();
    }

}
