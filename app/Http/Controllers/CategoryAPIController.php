<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryAPIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(){

        $categories = Category::all(); // get informations from database
        
        return response()->json(["message" => "success","categories" => $categories]);
    }

    public function insert(Request $request){
        
        $this->validate($request,['image'=>'file|required','name'=>'string|required','description'=>'string|required','price'=>'integer|required']);

        $category = new Category;

        if($request->file('image')){
            $image = $request->file('image');
            $filename = time(). '_' . $image->getClientOriginalName();
            $filename = str_replace(' ','-', $filename); 
            $image->move('images/category', $filename); 
            $category->image = 'category'.'/'. $filename; 
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->price=$request->price;

        $category->save();
        return response()->json(['message'=>'success','categories'=>$category],200);
        
    }

    public function update(Request $request,$id){

        $this->validate($request,['image'=>'file|required','name'=>'string|required','description'=>'string|required','price'=>'integer|required']); 

        $category=Category::find($id);

        if($request->file('image')){
            $image = $request->file('image');
            $filename = time(). '_' . $image->getClientOriginalName(); 
            $filename = str_replace(' ','-', $filename); 
            $image->move('images/category', $filename); 
            $category->image = 'category'.'/'. $filename; 
        }

        $category->name=$request->name;
        $category->description=$request->description;
        $category->price=$request->price;

        $category->update();
        return response()->json(['message'=>'success','category'=>$category],200); // 200 status

    }  

    public function remove($id){

        $category=Category::find($id);
        
        $path = 'images/'.$category->image;
        if(File::exists($path)){
            File::delete($path);
        }

        if($category != null || $category != ''){

            $category->delete();
            return response()->json(['message'=>'success','category'=>$category]);

        }else{
            return response()->json(['message'=>'fail'],404); // 404 not found
        }

    }

}
