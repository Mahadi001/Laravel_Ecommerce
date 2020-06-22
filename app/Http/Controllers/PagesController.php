<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function check_out(){
        return view('pages.check_out');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function product_page(){
        return view('pages.product_page');
    }

    public function shopping_cart(){
        return view('pages.shopping_cart');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function single_blog(){
        return view('pages.single_blog');
    }

    public function tracking(){
        return view('pages.tracking');
    }
}
