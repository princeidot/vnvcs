<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\blog;

use Illuminate\Http\Request;

class DynamicController extends Controller
{
    public function blog(Request $request)
    {
        $blogs = DB::table('blogs')
        ->select('blogs.*')
        ->orderByDesc('id')
            ->paginate(8);
    
            return view('blog-list')->with(compact('blogs'));
    }

    public function blog_post($url,Request $request )
 
            {
      
        $single = db::table('blogs')->where('url', $url)->first();
       
                   return view('single-blog')->with(compact('single'));

            }


    public function news(Request $request)
    {
      
        $news = DB::table('news')
        ->select('news.*')
        ->orderByDesc('id')
            ->paginate(8);

        return view('news-list')->with(compact('news'));
    }


    public function news_post($url, Request $request)
    {
        $single = db::table('news')->where('url', $url)->first();
       
        return view('single-news')->with(compact('single'));
    }


    public function case(Request $request)
    {

        $cs = DB::table('casestudies')
        ->select('casestudies.*')
        ->orderBy('id','asc')
            ->get();
        $csl = DB::table('casestudies')
        ->select('casestudies.*')
        ->orderBy('id', 'desc')
        ->limit('4')
        ->get();
     

        return view('case-study')->with(compact('cs','csl'));
    }

    public function casesingle( $url,Request $request)
    {
       
         $single = db::table('casestudies')->where('url', $url)->first();

        return view('single-case-study')->with(compact('single'));
    }


   
}
