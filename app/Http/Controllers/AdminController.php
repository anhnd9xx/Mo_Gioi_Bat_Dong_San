<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function dashboard(){
        return view('admin_layout');
    }
    public function admin_dashboard(Request $Request){
        $admin_email=$Request->admin_email;
		$admin_password=md5($Request->admin_password);
		$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
		if($result){
			session::put('admin_name',$result->admin_name);
			session::put('admin_id',$result->admin_id);
			return Redirect::to('/dashboard');
		}else {
			Session::put('message','Tài khoản hoặc mật khẩu sai rồi! Nhập lại đi ^^');
			return Redirect::to('/admin');
		}
    }
}
