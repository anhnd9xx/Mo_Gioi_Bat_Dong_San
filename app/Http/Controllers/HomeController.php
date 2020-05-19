<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function intro(){
        return view('pages.introduction');
    }
    public function room(){
        return view('pages.room_category');
    }
    public function service(){
        return view('pages.service');
    }
    public function booking(){
        return view('pages.booking_room');
    }
    public function sign_up(){
        return view('pages.sign_up');
    }
    public function sign_in(){
        return view('pages.sign_in');
    }
    public function db_room(){
        return view('pages.db_room');
    }
    public function vip1(){
        return view('pages.vip1');
    }
    public function vip2(){
        return view('pages.vip2');
    }

}
