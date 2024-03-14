<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(Request $request)
    {
        $cs = DB::table('casestudies')
        ->select('casestudies.*')
        ->orderBy('id', 'asc')
        ->get();
 $ne = DB::table('news')
        ->select('news.*')
        ->orderBy('id','Desc')
        ->limit('3')
        ->get();

        return view('index')->with(compact('cs','ne'));
    }

    public function contact()
    {
      
        return view('contact');
    }

public function about()
{
    return view('about');
}
  
    public function careers()
    {
        return view('custom-software');
    }
    public function services()
    {
        return view('services');
    }
    public function team()
    {
        return view('our-team');
    }

    public function blog()
    {
        //dd('hey');
        return view('blog-list');
    }


    public function products()
    {
      
        return view('products');
    }

    public function cfsmag_ee()
    {
       
        return view('cfsmag-ee');
    }
 public function policy()
    {

        return view('privacy');
    }
    public function terms()
    {
        return view('terms');
    }

}
