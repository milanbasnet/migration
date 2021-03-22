<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use App\Models\About;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $about= About:: latest()->take(1)->get();
        $show= Admin::where('typeImg', 'home')->latest()->take(1)->get();
        $visaone= Visa::where('boxnumber','1')->latest()->take(1)->get();
        $visatwo= Visa::where('boxnumber','2')->latest()->take(1)->get();
        $visathree= Visa::where('boxnumber','3')->latest()->take(1)->get();
        $visafour= Visa::where('boxnumber','4')->latest()->take(1)->get();
        $visafive= Visa::where('boxnumber','5')->latest()->take(1)->get();
        $visasix= Visa::where('boxnumber','6')->latest()->take(1)->get();

        // $about= Admin::where('typeImg', 'about')->latest()->take(1)->get();
        // $visaone=Admin::where('typeImg', 'visaone')->latest()->take(1)->get();
        // $visatwo=Admin::where('typeImg', 'visatwo')->latest()->take(1)->get();
        // $visathree=Admin::where('typeImg', 'visathree')->latest()->take(1)->get();
        // $visafour=Admin::where('typeImg', 'visafour')->latest()->take(1)->get();
        // $visafive=Admin::where('typeImg', 'visafive')->latest()->take(1)->get();
        // $visasix=Admin::where('typeImg', 'visasix')->latest()->take(1)->get();
        return view('index', compact('show', 'about', 'visaone', 'visatwo', 'visathree', 'visafour', 'visafive', 'visasix'));
       
        
    }
}
