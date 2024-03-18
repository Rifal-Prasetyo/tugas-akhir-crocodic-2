<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homepage()
    {


        $site = [
            'title' => 'Beranda | ' . session('settings')[0][0]['name_POS'],
            'description' => session('settings')[0][0]['description_POS']
        ];
        return view('homepage', compact('site'));
    }
}
