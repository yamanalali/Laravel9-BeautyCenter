<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0 )->with('children')->get();

    }


     public function Index()

   {
       $sliderdata=Service::limit(1)->get();
       $servicelist1=Service::limit(8)->get();

       return view( 'home.index',[
           "sliderdata" => $sliderdata ,
           "servicelist1" => $servicelist1
       ]);


   }
    public function service($id)

    {

        $data= Service::find($id);
        $images = DB::table('images')->where('service_id' , $id)->get();
        return view( 'home.service',[
            'data' => $data,
             'images' => $images

        ]);


    }
    public function categoryservices($id)

    {

        $data= Service::find($id);
        $images = DB::table('images')->where('service_id' , $id)->get();
        return view( 'home.service',[
            'data' => $data,
            'images' => $images

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
