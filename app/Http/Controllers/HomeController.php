<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
     public function Index ()

   {
       $sliderdata=Service::limit(3)->get();
       $servicelist1=Service::limit(8)->get();

       return view( 'home.index',[
           "sliderdata" => $sliderdata ,
           "servicelist1" => $servicelist1
       ]);


   }
   public function test()
   {
        return view( view: 'home.test');
   }

   public function param($id,$number)
   {
      echo "paramater 1:", $id;
      echo "<br>Paramater 2:", $number;
   }

   public function save()

    {
        echo "Save Function";
    }
}
