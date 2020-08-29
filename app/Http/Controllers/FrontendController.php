<?php


namespace App\Http\Controllers;


class FrontendController extends Controller
{

    public function index(){
        return view("frontend.home");
    }
    public function about(){
        return view("frontend.about");
    }
    public function service(){
        return view("frontend.service");
    }
    public function pricing(){
        return view("frontend.pricing");
    }
    public function contact(){
        return view("frontend.contact");
    }

}
