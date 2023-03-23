<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableGalleryController extends Controller
{
    public function tbGallery (){
        return view('pages.admin.table-gallery');
    }
}
