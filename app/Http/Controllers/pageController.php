<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function contact(){
        $cont = ['whatsapp' ,'insta', 'fb'];
        $tit ='contact us on';
        $langs =[
            'frontEnd' => ['HTML', 'CSS' , 'Bootstrap' , 'js'],
            'backend' => ['php' , 'mysql' , 'laravel']
        ];
       
        return view('pages.contact')->with($langs);
    }

    public function login(){
        return view('pages.login');
    }
}
