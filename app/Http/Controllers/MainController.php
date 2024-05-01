<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        $meals = Meal::all();
        return view('main.homemain',compact('meals'));
    }

}
