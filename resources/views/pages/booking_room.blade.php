@extends('layout')
@section('booking')

<section class="section" id="section_750608817">
		<div class="bg section-bg fill bg-fill  bg-loaded">

		</div><!-- .section-bg -->

		<div class="section-content relative">
			

<div class="gap-element clearfix" style="display:block; height:auto; padding-top:60px"></div>

<div class="row" style="max-width:1140px" id="row-409574701">

<div class="col small-12 large-12"><div class="col-inner">

<h1><strong><span style="color: #ab7727;">Liên hệ đặt phòng<br><img class="alignnonel wp-image-655" src="public/frontend/images/Path-736.png" alt="" width="175" height="1" srcset="public/frontend/images/Path-736.png 175w, public/frontend/images/Path-736-100x1.png 100w" sizes="(max-width: 175px) 100vw, 175px"><br></span></strong></h1>
		@if(session("success"))	
        <p style="color:#4caf50;">{{ session("success") }}</p>
		@endif
		@if(session("error"))
        <p style="color:#f44336;">{{ session("error") }}</p>
        @endif
<div role="form" class="wpcf7" id="wpcf7-f11-p762-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="{{URL::to('/bookingProcess')}}" method="post" class="wpcf7-form" novalidate="novalidate">
<div class="row">
<div class="col medium-4"><span class="wpcf7-form-control-wrap room-type"><select name="category" class="wpcf7-form-control wpcf7-select room-type1" aria-invalid="false" ><option value="Phòng đôi">Loại phòng</option><option value="Phòng đôi">Phòng đôi</option><option value="Phòng VIP 1">Phòng VIP 1</option><option value="Phòng VIP 2">Phòng VIP 2</option></select></span></div>
<div class="col medium-4"><span class="wpcf7-form-control-wrap room-type"><select name="amount" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="1">Số phòng</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></span></div>
<div class="col medium-2"><span class="wpcf7-form-control-wrap ngayden"><span>Ngày đến:</span><input type="date" name="checkin"  size="40"  aria-invalid="false"></span></div>
<div class="col medium-2"><span class="wpcf7-form-control-wrap ngayden"><span>Ngày đi:</span><input type="date" name="checkout" size="40" aria-invalid="false"></span></div>
<div class="col medium-12"><span class="wpcf7-form-control-wrap your-message"><input type="text" name="note" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Ghi chú"></span> </div>
<div class="col medium-12"><span class="wpcf7-form-control-wrap nguoimay"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><input type="checkbox" name="nguoimay" value="Tôi không phải là người máy"><span class="wpcf7-list-item-label">Tôi không phải là người máy</span></span></span></span></div>
<div class="col medium-12"><input type="submit" value="Đặt phòng" class="wpcf7-form-control wpcf7-submit butt2"><span class="ajax-loader"></span></div>
</div>
<div class="wpcf7-response-output wpcf7-display-none">
	
</div></form></div>


</div></div>


<style scope="scope">

</style>
</div>
<div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>

<div class="row" style="max-width:1140px" id="row-2126901250">

<div class="col medium-6 small-12 large-6"><div class="col-inner">

<h1><span style="color: #000943;">Thông tin liên hệ</span><br><span style="color: #ab7727;">SUN HOTEL HAI DUONG</span><br><span style="color: #ab7727;"><img class="alignnone wp-image-347" src="public/frontend/images/Path-823-1.png" alt="" width="99" height="1"></span></h1>
<p><span style="color: #ab7727;"><strong>Địa chỉ:</strong> Lô 31.1 khu đô thị Thiên Phú, Đại lộ Võ Nguyên Giáp, phường Tứ Minh, TP Hải Dương, tỉnh Hải Dương.</span></p>

</div></div>
<div class="col medium-6 small-12 large-6"><div class="col-inner">

<div class="gap-element clearfix" style="display:block; height:auto; padding-top:39px"></div>

<p><span style="color: #ab7727;"><strong>Số điện thoại:</strong> 09999999999 – 09999999999</span></p>
<p><span style="color: #ab7727;"><strong>Email:</strong> sunhotelhaiduong@gmail.com</span></p>
<p><span style="color: #ab7727;"><strong>Fax:</strong> 99999999999</span></p>

</div></div>


<style scope="scope">

</style>
</div>
<div class="row" style="max-width:1140px" id="row-1936503116">

<div class="col medium-6 small-12 large-6"><div class="col-inner">

<h3><strong><span style="color: #000943;">Đặt phòng trực tuyến</span></strong></h3>
<div class="row" id="row-396538025">

<div class="col medium-3 small-6 large-3"><div class="col-inner text-center">

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2125573301">
								<div class="img-inner dark">
			<img width="79" height="94" src="public/frontend/images/Image-16.png" class="attachment-large size-large" alt="">						
					</div>
								
<style scope="scope">

#image_2125573301 {
  width: 60%;
}
</style>
	</div>
	


</div></div>
<div class="col medium-3 small-6 large-3"><div class="col-inner" style="padding:0 0px 0px 0px;">

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_360874058">
								<div class="img-inner dark" style="margin:7px 0px 0px 0px;">
			<img width="133" height="63" src="public/frontend/images/booking-com-vector-png-booking-com-logo-eps-vector-image-300-142-300-142-300.png" class="attachment-original size-original" alt="">						
					</div>
								
<style scope="scope">

#image_360874058 {
  width: 100%;
}
</style>
	</div>
	


</div></div>
<div class="col medium-3 small-6 large-3"><div class="col-inner">

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1920449954">
								<div class="img-inner dark">
			<img width="123" height="82" src="public/frontend/images/Image-17.png" class="attachment-large size-large" alt="">						
					</div>
								
<style scope="scope">

#image_1920449954 {
  width: 100%;
}
</style>
	</div>
	


</div></div>
<div class="col medium-3 small-6 large-3"><div class="col-inner">

	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1929592037">
								<div class="img-inner dark">
			<img width="165" height="87" src="public/frontend/images/agoda-logo-flat-2019.png" class="attachment-large size-large" alt="">						
					</div>
								
<style scope="scope">

#image_1929592037 {
  width: 100%;
}
</style>
	</div>
	


</div></div>

</div>

</div></div>


<style scope="scope">

</style>
</div>
<style scope="scope">

#section_750608817 {
  padding-top: 30px;
  padding-bottom: 30px;
}
</style>
	</section>
@endsection