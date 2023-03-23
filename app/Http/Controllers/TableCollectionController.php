<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableCollectionController extends Controller
{
    public function tbCollection (){
        return view('pages.admin.table-collection');
    }
}
