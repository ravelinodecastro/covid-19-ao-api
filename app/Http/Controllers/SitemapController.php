<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Tip;

class SitemapController extends Controller
{
    public function index()
    {
      //$generals = General::all()->first();
     // $tips = Tip::all()->first();
   
      return response()->view('sitemap.index', [
         // 'generals' => $generals,
        //  'tips' => $tips,
      ])->header('Content-Type', 'text/xml');
    }
}