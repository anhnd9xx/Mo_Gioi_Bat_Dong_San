@extends('layout')
@section('sign_in')
<div class="row">
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:60px"></div>
    <div class="col small-12 large-12">
        <h2>Đăng nhập tài khoản</h2>
    <form action="">
    {!! csrf_field() !!}
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" placeholder="Nhập số điện thoại" required=""></span></div>
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-password"><input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-password" placeholder="Nhập mật khẩu" required=""></span></div>
        <input type="submit" value="Đăng nhập" class="wpcf7-form-control wpcf7-submit butt2">
    </form>
    <div>
        <p>Nếu nếu bạn chưa có tài khoản thì đăng ký <a href="{{URL::to('/dang-ky')}}" style="color:red;">Tại đây</a></p>
    </div>
    </div>
</div>
@endsection