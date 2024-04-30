<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        $categories = Category::all();
        return view('main.homemain',compact('categories'));
    }

}
