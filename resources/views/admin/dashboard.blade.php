@extends('admin_layout')
@section('dashboard')
<section id="main-content">
    <section class="wrapper">

<p style="text-align: center;color:#000000; font-weight: bold;">Tài khoản người dùng</p>
                        <table class="table table-bordered table-hover" >
                            <thead>
                                <tr style="text-transform: uppercase;">
                                    <th  style="color:#000000;">Người dùng</th>
                                    <th  style="color:#000000;">Loại phòng</th>
                                    <th  style="color:#000000;">Số lượng</th>
                                    <th  style="color:#000000;">Ngày đến</th>
                                    <th  style="color:#000000;">Ngày đi</th>
                                    <th  style="color:#000000;">Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lstNumbers as $number)
                                    <tr class="">
                                        <td  style="color:#000000;">{{ $number->name }}</td>
                                        <td  style="color:#000000;">{{ $number->category }}</td>
                                        <td  style="color:#000000;">{{ $number->amount }}</td>
                                    	<td  style="color:#000000;">{{ $number->checkin }}</td>
                                    	<td  style="color:#000000;">{{ $number->checkout }}</td>
                                    	<td  style="color:#000000;">{{ $number->note }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

  </section>
  </section>
@endsection