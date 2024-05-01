<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MealAPIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(){

        $meals = Meal::all(); // get informations from database
        
        return response()->json(["message" => "success","meals" => $meals]);
    }

    public function insert(Request $request){
        
        $this->validate($request,['image'=>'file|required','name'=>'string|required','description'=>'string|required','price'=>'integer|required']);

        $meal = new Meal;

        if($request->file('image')){
            $image = $request->file('image');
            $filename = time(). '_' . $image->getClientOriginalName();
            $filename = str_replace(' ','-', $filename); 
            $image->move('images/meal', $filename); 
            $meal->image = 'meal'.'/'. $filename; 
        }

        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->price=$request->price;

        $meal->save();
        return response()->json(['message'=>'success','meals'=>$meal],200);
        
    }

    public function update(Request $request,$id){

        $this->validate($request,['image'=>'file|required','name'=>'string|required','description'=>'string|required','price'=>'integer|required']); 

        $meal=Meal::find($id);

        if($request->file('image')){
            $image = $request->file('image');
            $filename = time(). '_' . $image->getClientOriginalName(); 
            $filename = str_replace(' ','-', $filename); 
            $image->move('images/meal', $filename); 
            $meal->image = 'meal'.'/'. $filename; 
        }

        $meal->name=$request->name;
        $meal->description=$request->description;
        $meal->price=$request->price;

        $meal->update();
        return response()->json(['message'=>'success','meal'=>$meal],200); // 200 status

    }  

    public function remove($id){

        $meal=Meal::find($id);
        
        $path = 'images/'.$meal->image;
        if(File::exists($path)){
            File::delete($path);
        }

        if($meal != null || $meal != ''){

            $meal->delete();
            return response()->json(['message'=>'success','meal'=>$meal]);

        }else{
            return response()->json(['message'=>'fail'],404); // 404 not found
        }

    }

}
