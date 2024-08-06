<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreemapController extends Controller
{
    //


    public function index(){
        return view('admin.painel.treemap.index');
      //return view('treemap');
    }

    public function api(){
      
        /**
         *  Api parou de funcionar então tive que desativar os inputs da mesma
         * 
         */

    }
}
