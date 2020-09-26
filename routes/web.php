<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/',["as"=>"home","uses"=>"FrontendController@index"]);
$router->get('/about',["as"=>"about","uses"=>"FrontendController@about"]);
$router->get('/service',["as"=>"service","uses"=>"FrontendController@service"]);
$router->get('/product',["as"=>"product","uses"=>"FrontendController@product"]);
$router->get('/pricing',["as"=>"pricing","uses"=>"FrontendController@pricing"]);
$router->get('/contact',["as"=>"contact","uses"=>"FrontendController@contact"]);
$router->post('/sendmail',["as"=>"sendmail","uses"=>"FrontendController@sendmail"]);
