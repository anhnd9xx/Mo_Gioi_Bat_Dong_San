@extends('layout')
@section('sign_in')
<div class="row">
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:60px"></div>
    <div class="col small-12 large-12">
        <h2>Đăng nhập tài khoản</h2>
        @if(session("success"))
        <p style="color:#4caf50;">{{ session("success") }}</p>
        @endif
        @if(session("error"))
        <p style="color:#f44336;">{{ session("error") }}</p>
        @endif
    <form action="{{URL::to('/signIn')}}" method="post">
    {!! csrf_field() !!}
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="phoneNumber" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" placeholder="Nhập số điện thoại" required=""></span></div>
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-password"><input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-password" placeholder="Nhập mật khẩu" required=""></span></div>
        <input type="submit" value="Đăng nhập" class="wpcf7-form-control wpcf7-submit butt2">
    </form>
    <div>
        <p>Nếu nếu bạn chưa có tài khoản thì đăng ký <a href="{{URL::to('/dang-ky')}}" style="color:red;">Tại đây</a></p>
    </div>
    </div>
</div>
@endsection