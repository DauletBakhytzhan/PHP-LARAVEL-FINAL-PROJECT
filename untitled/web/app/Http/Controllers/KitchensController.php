<?php

namespace App\Http\Controllers;

use App\Models\kitchens;
use Illuminate\Http\Request;

class KitchensController extends Controller
{
    //

    public function index(){
        print("123");
        return kitchens::all();

    }
}
