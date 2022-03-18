<?php

namespace App\Http\Controllers;
namespace lilac\keywords;
use DOMDocument;
use MetaData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class KeywordsController extends Controller
{
    

    public function GetKeyword()
    {

        //dd(class_exists('MetaData'));
        $routepath=array();
        $routeList = \Route::getRoutes();//To get all routes of main app
        $files = Storage::disk('views')->files();//To get all views of main app
        $path = base_path('resources/views');
        return($files);
        // foreach($files as $file)
        // {
        //      $ViewArray=explode(".",$file);
        //      $f=view($ViewArray[0]);
        //     //$html = $f->render();
        //     $html =readfile($path."/".$file);
        //     //$met=readfile($f);
        //     return($html);
        // }
    }
   

   

   
}
