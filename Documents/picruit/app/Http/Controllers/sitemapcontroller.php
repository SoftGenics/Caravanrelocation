<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;

class sitemapcontroller extends Controller
{
    public function index(): Response{
        

         
         return Response()->view('pages/sitemap')->header('Contant-Type','text/xml');
    }
   
    //
}
