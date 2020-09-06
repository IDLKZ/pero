<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendmail(Request $request){

        $_SESSION['name'] = $request->get('name');
        $_SESSION['email'] = $request->get('email');
        $_SESSION['subject'] = $request->get('subject');
        $_SESSION['message'] = $request->get('message');
        Mail::send("mail.mail",["title"=>"Заявка с сайта"],function ($message) use ($request){
            $message->to("idlkz2019@gmail.com","Заявка с сайта");
            $message->from('info@weplay.kz', "Заказчик: {$request->get('name')} \n  Почта: {$request->get('email')} \n Тема: {$request->get('subject')}")->subject('Заказ с сайта');
        });

        return view("frontend.result");
    }

}
