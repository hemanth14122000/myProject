<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class ApiController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'c_password'=>'required|same:password'

            ]
            );
        if($validator->fails()){
            return response()->json()(['message'=>'validation error'],400);
        }
        $data =$request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        $response['token'] = $user->createToken('hemanth_blog');
        $response['name'] = $user->name;
        return redirect("home");
    }
    public function login(Request $request){
        $data= $request->input();
        $request->session()->put('email',$data['email']);
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            //'password' => 'required|min:6'
        ]);
        
        if(Auth::attempt(['email'=>$request->input('email'),'password' => $request->input('password')],)){
            $user = Auth::user();
            $response['token'] = $user->createToken('hemanth_blog');
            $response['name'] = $user->name;
            $admin=$user->is_admin;
            session()->put('isadmin',$admin);
            $name=$user->name;
            session()->put('name',$name);
            return redirect("dashboard");
        }else{
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
              }
            //print_r(response()->json());
            //exit;
            //return Redirect::to('/signin')->with('message', 'invalid credentials....Check you password');
            //return "invalid credentials";
        
        

    }
    public function detail(){
        $user =Auth::user();
        $data=[
            'name'=>$user->name,
            'email'=>$user->email,
        ];
        $response['user'] = $data;
        return "hi";
    }

}
