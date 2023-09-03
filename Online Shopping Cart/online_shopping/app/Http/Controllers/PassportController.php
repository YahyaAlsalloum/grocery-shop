<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens; 

class PassportController extends Controller
{
    public function register (Request $Request)
    {
        $this->validate($Request,
        [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'phone'=>'required',
            'location'=>'required',
        ]);
        $user = User::create([
            'name'=>$Request->name,
            'email'=>$Request->email,
            'password'=>bcrypt($Request->password) ,
            'phone'=>$Request->phone,
            'location'=>$Request->location,
        ]);
        $token = $user->createToken('yahya123')->accessToken;
        return response()->json(['token'=> $token],200);
    }

    public function login (Request $Request)
    {
        $data =
        [
            'email'=>$Request->email,
            'password'=>$Request->password
        ];
        if(auth()->attempt($data))
        {
            $token = auth()->user()->createToken('yahya123')->accessToken;
            //dd($token);
            return response()->json(['token'=> $token],200);

        }
        else
        {
            return response()->json(['error'=> 'unauthorised'],401);

        }
    }

    public function info (){
        $user=auth()->user();
        return response()->json(['user'=> $user],200);

    }
}
