@extends('layout')
@section('db_room')
<div>
<div class="row">
    <div class="tit col medium-12">
    <h1 class="p-color">Phòng Đôi</h1>
    <p class="s-color">Hotel rome:<span style="padding-left:15px; width:70%;"><img src="public/frontend/images/Group-2988.png"></span></p>
    </div>
</div>
<div class="row">
    <div class="col noidung1 medium-9">
       
<p style="color:#000943" class="has-text-color"><strong>Sự lựa chọn tuyệt vời cho một kỳ nghỉ thư giãn cho gia đình có trẻ em hoặc một nhóm bạn.</strong></p>



<p>
Khách sạn SUN HOTEL HẢI DƯƠNG có 3 loại phòng: VIP 1, VIP 2 và Phòng đôi.<br>
Các dịch vụ tại khách sạn: a<br>
–	Dịch vụ xe đưa đón.<br>
–	Dịch vụ đặt vé máy bay.<br>
–	Dịch vụ đổi ngoại tệ.<br>
–	Dịch vụ giặt là.<br>
–	Nhân viên phiên dịch tiếng Anh, Hàn, Trung.<br>
–	Phục vụ đồ ăn nhanh 24/24: Phở, mỳ tôm, cháo….


</p>
     </div>

    <div class="col medium-3">
        <p class="tu">Từ<br><span class="price">500.000đ</span>/ Đêm</p>
        <form action="{{URL::to('/dat-phong')}}" method="post">
            <input name="room_type" type="hidden" value="Phòng Đôi">
            <button class="datphong" type="submit">TIẾN HÀNH ĐẶT PHÒNG</button>
        </form>
        
        <table class="dichvus">
            <tbody><tr>
                <td><img style="padding-bottom:10px;" src="public/frontend/images/bed.png"> <p>1 Giường</p></td>
                <td><p></p></td>
             </tr>
             <tr>
                  <td><img style="padding-bottom:10px;" src="public/frontend/images/wifi.png"><p>Free wifi</p></td>
                  <td><img style="padding-bottom:10px;" src="public/frontend/images/bathtub-1.png"><p>Bồn tắm</p></td>
             </tr>
        </tbody></table>
    </div>
</div>

</div>
@endsection