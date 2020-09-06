<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{

    public function index(){
        $title = "Pero International Agency - курсы по подготовке к поступлению и английского языка в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.home",compact("title","description","keywords"));
    }
    public function about(){
        $title = "Pero International Agency - О нас";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.about",compact("title","description","keywords"));
    }
    public function service(){
        $title = "Pero International Agency - курсы по подготовке к поступлению и английского языка в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.service",compact("title","description","keywords"));
    }
    public function pricing(){
        $title = "Pero International Agency - Цены за курсы в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.pricing",compact("title","description","keywords"));
    }
    public function contact(){
        $title = "Pero International Agency - контакты PERO в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero,Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.contact",compact("title","description","keywords"));
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
        return view("frontend.result",compact("title","description","keywords"));
    }

}
