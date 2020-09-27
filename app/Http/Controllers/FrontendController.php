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
        $data = [
            0 => [
                'id' => 0,
                'name' => 'Айнур Абильбаева',
                'position' => 'Репетитор по математике и 1-11 классов, Основатель PERO',
                'img' => 'assets/img/teammate1.jpg',
                'description' => '* Имеет 5 лет опыта преподавания в лучших образовательных центрах Казахстана, а также в лучшей онлайн школе России и СНГ «SkyEng». * Закончила школу с Алтын Белги, побывав на рейтинге на 1 месте из 366 учеников в РФМШ по физике и математике. * Набрала очень высокий балл по SET Math (27/30), а также максимальный по SAT Math (800/800).
* Призёр международных, и национальных олимпиад по математике и информатике.
* Студентка с высоким GPA среди своего потока, и финалистка международного конкурса “BRICO2020”, а также участница международных программ.
За 5 лет многие ученики Айнур поступили в Назарбаев Университет, а также за границу, сдав экзамены на высокие баллы. Отзывы учеников вы можете пролистать в ленте:)',
                'main_position' => 'Преподаватель математики 7-11 классов: работа с группой (развитие мышления, заполнить пробелы). Подготовка к экзамену по математике в Назарбаев Университет. Консультации по поступлению в зарубежные ВУЗы и НУ'
            ],
            1 => [
                'id' => 1,
                'name' => 'Бекасыл Батталгазы',
                'position' => 'Консультант по поступлению заграницу, репетитор физики и математики',
                'img' => 'assets/img/teammate2.jpg',
                'description' => 'Выпускник Назарбаев Университета (Факультет Инженерии), а также выпускник РФМШ Алматы. Является консультантом по поступлению заграницу и разработке стратегии для подготовки, и репетитором по математике/физике уже 3 года.
Бекасыл закончил школу с Алтын Белги и набрал по SAT Math Level 2 (800/800) и SAT Physics (780/800), а также GRE (168/170 Quant).
За время обучения на бакалавре, Бекасыл успел:
▪️Опубликовать 2 научных работ
▪️Побывать на стажировке в Национальной Лаборатории США имени Лоуренса Беркли (Калифорния)
▪️Выиграть награду «Лучшая Научная Работа» на конференции от Американского Института Химических Инженеров в Питтсбурге, Пенсильвания
▪️Представить свою другую научную работу на ежегодной конференции по Нанонауке в Беркли, Калифорния
▪️Выиграть стипендию от фонда Есенова ($7500) на прохождение стажировки зарубежом
▪️Получить приглашение на обучение по программе PhD (стипендия от университета покрывает полностью обучение и включает ежемесячные расходы ($2000))',
                'main_position' => '▪️Консультации по стажировкам и конференциям
▪️Консультации по поступлению на бакалавр, магистратуру и докторантуру (PhD)
▪️Консультации по разработке стратегии по поступлению и подготовке
▪️Преподаватель математики/физики'
            ],
            2 => [
                'id' => 2,
                'name' => 'Еркежан Болатбекова ',
                'position' => 'CEO & Founder',
                'img' => 'assets/img/teammate7.jpg',
                'description' => 'Студентка 2-го курса факультета физики Школы естественных, гуманитарных и социальных наук Назарбаев Университета, а также выпускница НИШ г. Семей. Является репетитором более 2х лет.
-Закончила учёбу в НИШ с отличием, набрав высокие результаты А, А, А (Math, Chemistry, Math) по Cambridge A-level examinations.
-Баллы ЕНТ 133/140 (40 математика, 38 физика)
-Поступила на NU Foundation Year Program с баллами 176/240
-Работала в крупнейшей подготовительной школе iplus и в других образовательных центрах
-Обладательница призёрных мест в международных и республиканских олимпиадах.',
                'main_position' => 'CEO & Founder'
            ],
            3 => [
                'id' => 3,
                'name' => 'Салтанат Ермаханова',
                'position' => 'Репетитор математики и физики',
                'img' => 'assets/img/teammate4.png',
                'description' => '* Имеет 2 года опыта преподавания в лучших образовательных центрах Казахстана по подготовке к вступительным экзаменам в университеты.
* Закончила обучение в НИШ со знаком отличия и результатами А*A*A (Biology,Physics, Maths) по Cambridge A-level Examinations.
* Ученики, которые готовились к поступлению в НИШ у Салтанат поступили в НИШ с высочайшими результатами.
* Набрала очень высокий балл по SAT Physics (780/800), а также наивысший по SAT Math Level 2 (800/800).
* Результат за экзамен IELTS ( 7.0), SAT Reasoning (1450/1600).',
                'main_position' => '* Преподаватель математики и физики 7-11 классов; * Подготовка к экзамену по поступлению в Назарбаев Университет (SAT, IELTS, NUFYPET). * Подготовка к поступлению в НИШ, КТЛ, РФМШ. '
            ],
            4 => [
                'id' => 4,
                'name' => 'Сабина Кумарова',
                'position' => 'Репетитор математики и английского языка',
                'img' => 'assets/img/teammate5.jpg',
                'description' => 'Сабина является студенткой 4-ого курса Назарбаев университета. Специальность - гражданское строительство. 3 года училась в КТЛ, где получила бесценные знания и навыки. Выпускница НИШ физико-математического направления г.Алматы. Результат ЕНТ 120 баллов из 125. Работает в самой большой в России и Европе онлайн-школе "SkyEng" преподавателем английского языка 2-ой год. Дважды обладатель первого места на Корейско-Казахстанском международном семинаре по промышленному развитию в НУ. Публикуется 1 научная работа. Кроме того работает над вторым проектом на тему "Lightweight  Aggregates Concrete" (Бетон на легких заполнителях).',
                'main_position' => 'Преподаватель математики 7-11 классов индивидуально и в группах. Преподаватель английского языка. Подготовка к экзамену по математике и английскому языку для поступления в НИШ, КТЛ.'
            ],
            5 => [
                'id' => 5,
                'name' => 'Раушан Искендирова',
                'position' => 'CEO & Founder',
                'img' => 'assets/img/teammate6.jpg',
                'description' => 'Студентка 2-го курса Назарбаев Университета по специальности Биологические науки. Преподает IELTS, SAT Biology и английский. Закончила НИШ на Алтын белгі. IELTS score:8.ЕНТ:139. Biology and Chemistry Cambridge Examinations:А*',
                'main_position' => 'CEO & Founder'
            ],
            6 => [
                'id' => 6,
                'name' => 'Жансая Нуржаубаева',
                'position' => 'CEO & Founder',
                'img' => 'assets/img/teammate3.jpg',
                'description' => 'Студентка 2 курса Назарбаев Университета. Специальность - Биологические науки. Одна из лучших выпускников НИШ химико-биологического направления г.Кызылорда. Результаты : ЕНТ 139 из 140. Cambridge A-level Examination : A*/A*/A биология,химия,математика. IELTS 7.0. Победитель олимпиад',
                'main_position' => 'Подготовка к поступлению в НИШ. Преподаватель английского языка и математики 1-6 класс'
            ]
        ];
        return view("frontend.about",compact("title","description","keywords", 'data'));
    }
    public function service(){
        $title = "Pero International Agency - курсы по подготовке к поступлению и английского языка в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.service",compact("title","description","keywords"));
    }
    public function product(){
        $title = "Pero International Agency - курсы по подготовке к поступлению и английского языка в Астане";
        $description = "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!";
        $keywords = "Pero, ▪️Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции";
        return view("frontend.product",compact("title","description","keywords"));
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
