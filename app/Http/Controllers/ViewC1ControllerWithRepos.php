<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewC1ControllerWithRepos extends Controller
{
    public function index(){
        return view('eproject.viewC1.index');
    }

    public function shop(){
        return view('eproject.viewC1.shop');
    }

    public function cart(){
        return view('eproject.viewC1.cart');
    }

}
