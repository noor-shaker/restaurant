<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json(['message'=>'Login successful ✅','user'=>$user],200);
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email' , $request->email)->first();
        $password = Hash::check($request->password , $user->password);

        if(!$user || !$password){
            return response()->json(['message'=>'error in email or password']);
        }else{
            $token = $user->createToken('userToken')->plainTextToken;
            return response()->json(['message'=>'Login successful ✅','token'=>$token,'user'=>$user],200);
        }
    }
}
