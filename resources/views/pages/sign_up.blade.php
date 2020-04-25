@extends('layout')
@section('sign_up')
<div class="row">
    <div class="gap-element clearfix" style="display:block; height:auto; padding-top:60px"></div>
    <div class="col small-12 large-12">
        <h2>Đăng ký tài khoản</h2>
    <form action="">
    {!! csrf_field() !!}
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Họ và tên" required=""></span></div>
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Số điện thoại" required=""></span></div>
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"  placeholder="Email" required=""></span></div>
        <div class="col medium-5"><span class="wpcf7-form-control-wrap your-password"><input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-password" placeholder="Password" required=""></span></div>
        <input type="submit" value="Đăng ký" class="wpcf7-form-control wpcf7-submit">
    </form>
    </div>
</div>
@endsection