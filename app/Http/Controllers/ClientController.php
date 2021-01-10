<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ClientController extends Controller
{
   public function compte()
   {

    return view('layout-client.compte');


     }
     public function cart()
     {
        $categories =  Categorie::all();

      return view('layout-client.cart',compact('categories'));


       }

       public function slide(){
           /*
        $sliders = Slider::where('etat','active');
                $sliders = Slider::all();

        */
         $sliders= DB::table('sliders')->where('etat','active')->get();

           return view('layout-client.slider',compact('sliders'));
       }

}
