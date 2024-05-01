<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Meal;
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

        $meals = Meal::paginate(2); 
        // $meals = Meal::all();  // Get all data
        return view('pages.meal.index',compact('meals'));

    }

    public function create(){
        return view('pages.meal.create');
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
        return redirect()->route('index');
    }

    public function edit($id){
        $meal=Meal::find($id);
        return view('pages.meal.edit',compact('meal'));
    }

    public function update(Request $request,$id){

        $this->validate($request,['name'=>'string|required','description'=>'string|required','price'=>'integer|required']);

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
        return redirect()->route('index');
    }  

    public function remove($id){
        $meal=Meal::find($id);

        $path = 'images/'.$meal->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $meal->delete();
        return redirect()->route('index');
    }

}
