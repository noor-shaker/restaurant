<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function dashboard(){
        
        return view('dashboard.layout.dashboard');
    }

    public function index(){

        $categories = Category::paginate(2); 
        // $categories = Category::all();  // Get all data
        return view('pages.category.index',compact('categories'));

    }

    public function create(){
        return view('pages.category.create');
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
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category=Category::find($id);
        return view('pages.category.edit',compact('category'));
    }

    public function update(Request $request,$id){

        $this->validate($request,['name'=>'string|required','description'=>'string|required','price'=>'integer|required']);

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
        return redirect()->route('category.index');
    }  

    public function remove($id){
        $category=Category::find($id);

        $path = 'images/'.$category->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $category->delete();
        return redirect()->route('category.index');
    }

}
