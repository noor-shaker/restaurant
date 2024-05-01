<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function search(Request $request) {
        if($request->ajax()){
            $data = Meal::where('name','LIKE','%'. $request->name .'%')->get();
            $result = "";
            if(count($data) > 0){
                $result = "<ul>";
                foreach($data as $item){
                    $result .= "<li>". $item->name."</li>";
                }
                $result .= "</ul>";
            }else{
                $result .= "<li>There is no data.</li>";
            }
            return $result;
        }
        return view("pages.meal.search");
    }
}
