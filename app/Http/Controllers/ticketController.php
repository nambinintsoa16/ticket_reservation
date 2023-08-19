<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class ticketController extends Controller
{
    public function accueil(){
      return view('page.accueil');
    }
    public function create_register(){
        return view('page.register');
    }
    public function create_user(Request $request){
        $this->validate($request,["email"=>['required','email'],
        "name"=>["required"],'password' => ['required' , 'min:8']]);
         var_dump($request->except('_token'));
        $user = User::create(
            [
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=>$request->password
            ]
        );
      
        auth()->login($user);
      
    }
    public function ckeck_login(Request $request){
         $data =[];
         $this->validate( $request,['user'=> ['required'],'password' => ['required' , 'min:8']]);
         Auth::attempt([
            'email'=>$request->user,
            'password'=>$request->password
         ]);

         return redirect()->back();
    }
    public function logout(){
        FacadesSession::flush();
        auth()->logout();
        return redirect('accueil');
    }
    public function login(){
        return view('page.login');
    }
    public function contact(){

    }
}
