<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function lavoratore()
    {
        if(auth()->user()->role == "Lavoratore"){
            return view('lavoratore.home');
        } 
        else {
            return redirect('home')->with('error',"You don't have the permissions to access here.");
        }
        
    }

    public function azienda()
    {
        if(auth()->user()->role == "Azienda"){
            return view('azienda.home');
        } 
        else {
            return redirect('home')->with('error',"You don't have the permissions to access here.");
        }
        
    }

    public function istituto()
    {
        if(auth()->user()->role == "Istituto"){
            return view('istituto.home');
        } 
        else {
            return redirect('home')->with('error',"You don't have the permissions to access here.");
        }
        
    }
}
