<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;  
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\Account;
use App\Booking;


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
        $this->AuthLogin()->with("error", "Bạn chưa đăng nhập! Vui lòng đăng nhập để đặt phòng");
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
    public function dang_xuat()
   {
      Session::put('name', null);
      Session::put('id', null);
      return Redirect::to('/dang-nhap');
   }
   public function AuthLogin()
   {
      $id=Session::get('id');
      if ($id) {
         return back();
      } else return Redirect::to('/dang-nhap')->send();
   }

    //xử lý đăng kí phòng
    public function signUp(Request $Request){
        if (!isset($Request->name) or !isset($Request->age) or !isset($Request->phoneNumber) or !isset($Request->email) or !isset($Request->password)) {
            return back()->with("error", "Bạn nhập thiếu thông tin!");
        }
        else{
        $account = Account::create([
            "name" => $Request->name,
         "age" => $Request->age,
         "phoneNumber" => $Request->phoneNumber,
         "email" => $Request->email,
         "password" => md5($Request->password),
        ]);
        return Redirect::to('/dang-nhap')->with("account",$account)->with("success","Đăng kí thành công, vui lòng đăng  nhập!");
        }
    }
    //xử lý đăng kí phòng
    public function bookingProcess(Request $Request){
        if (!isset($Request->category) or !isset($Request->amount) or !isset($Request->checkin) or !isset($Request->checkout)) {
            return Redirect::to('/dat-phong')->with("error", "Bạn nhập thiếu thông tin!");
        }
        else{
        $booking = Booking::create([
         "category" => $Request->category,
         "amount" => $Request->amount,
         "checkin" => $Request->checkin,
         "checkout" => $Request->checkout,
         "note" => $Request->note,
        ]);

        return Redirect::to('/dat-phong')->with("success","Đăng kí thành công, vui lòng đăng  nhập!");
        }
    }
    // xử lý đăng nhập người dùng
    public function signIn(Request $Request){
        $phoneNumber=$Request->phoneNumber;
		$password=md5($Request->password);
		$result = DB::table('users')->where('phoneNumber',$phoneNumber)->where('password',$password)->first();
		if($result){
			session::put('name',$result->name);
			session::put('id',$result->id);
			return Redirect::to('/');
		}else {
			return back()->with("error","Tài khoản hoặc mật khẩu sai rồi! Nhập lại đi ^^");
		}
    }

}
