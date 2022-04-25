<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
     public function Index ()

   {
       return view( view: 'home.index');

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
