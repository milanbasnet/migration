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
        $store->imgfile=json_encode($imagename);
        $store->save();

        return redirect()->route('adminDisplay');
    }
}
