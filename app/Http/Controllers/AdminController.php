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
    public function AuthLogin(){
		$admin_id = session::get('admin_id');
		if($admin_id){
			return Redirect::to('/dashboard');
		}
		else return Redirect::to('/admin')->send();
	}
    public function login(){
        return view('admin_login');
    }
    public function show_dashboard(Request $request){
        $admin_email=$request->admin_email;
		$admin_password=md5($request->admin_password);
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
    public function account(){
		$this->AuthLogin();
   		return view('admin.account');
    }
    public function dashboard(){
		$this->AuthLogin();
   		return view('admin.dashboard');
    }
    public function logout(){
		session::put('admin_name',null);
		session::put('admin_id',null);
    	return Redirect::to('/admin');
    } 
}
