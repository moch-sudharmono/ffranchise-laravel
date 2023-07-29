<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Brands;

class BrandsController extends Controller
{
    // List
    public function list() {

        $brands = Brands::orderByDesc('created_at')->get();

        return view('list', [
            'brands' => $brands
        ]);
    }

    // Detail
    public function detail($brand){

    }
}
