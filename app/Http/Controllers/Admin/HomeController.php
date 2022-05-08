<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index ()
    {
        $sliderdata = Service::limit(4);
        return view(  'admin.index',[ "sliderdata" => $sliderdata ]);




    }
}
