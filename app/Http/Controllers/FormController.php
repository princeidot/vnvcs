<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Demos;

class FormController extends Controller
{
    public function contact_us(Request $request)
    {
            
        $datas = $request->input();
       
        $req = new Contacts();
        $req->name = $datas['name'];
        $req->email = $datas['email'];
        $req->mobileno = $datas['number'];
        $req->meg = $datas['message'];

        $req->save();
        return redirect('/contact-us');
    }


    public function demoproduct(Request $request)
    {
        switch ($request->input('action')) {
            case 'view':

              
                $datas = $request->input();

                $req = new Demos();
                $req->name = $datas['name'];
                $req->mail = $datas['mail'];
                $req->mno = $datas['mno'];
                $req->pname = $datas['product'];
                $req->forwhat = 'View Brochure';
               $req->save();
              $pdname= $request->input('product');
                $file= $pdname.'.pdf';
             
                $path = public_path('brochure' . '/' . $file);

                // header
                $header = [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $file . '"'
                ];
                return response()->file($path, $header);
                break;

            case 'demo':
          
                $datas = $request->input();

                $req = new Demos();
                $req->name = $datas['name'];
                $req->mail = $datas['mail'];
                $req->mno = $datas['mno'];
                $req->pname = $datas['product'];
                $req->forwhat = 'For Demo';
                $req->save();
                return redirect('/products');
                break;
        }
    }


}
