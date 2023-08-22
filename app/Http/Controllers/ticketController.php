<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Produits;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class ticketController extends Controller
{
    public function render_view($page,$data=array()){
      $menu = json_decode(file_get_contents(storage_path() . "/menu/menu_file.json"), true);
      $parameter = ["data"=>$data,"menu"=>$menu];
      return view($page,compact("parameter"));
    }
    public function accueil(){
       $liste_event_actif = Categories::with(["Produits"])->get();
       return $this->render_view('page.accueil',compact('liste_event_actif'));
    }
    public function login(){
        return $this->render_view('page.login');
    }
    public function contact(){
        return $this->render_view('page.contact');
    }
    public function create_register(){
        return $this->render_view('page.register');
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
        return redirect(route("accueil"));
    }
}
