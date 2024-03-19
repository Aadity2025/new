<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeAction()
    {
        return view('home');
    }

    public function aboutAction(){
        return view('about');
    }

    public function servicesAction(){
        return view('services');
    }

    public function productsAction(){
        return view('products');
    }

    public function contactAction(){
        return view('contact');
    }
}
