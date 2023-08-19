<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function accueil(){
      return view('page.accueil');
    }
}
