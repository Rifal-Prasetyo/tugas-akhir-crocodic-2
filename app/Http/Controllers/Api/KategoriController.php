<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function getAllCategory()
    {
        $category = Kategori::all();
        return $category;
    }
}
