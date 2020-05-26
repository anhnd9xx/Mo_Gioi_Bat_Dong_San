@extends('admin_layout')
@section('account')
<section id="main-content">
    <section class="wrapper">

<p style="text-align: center;color:#000000; font-weight: bold;">Tài khoản người dùng</p>
                        <table class="table table-bordered table-hover" >
                            <thead>
                                <tr style="text-transform: uppercase;">
                                    <th  style="color:#000000;">STT</th>
                                    <th  style="color:#000000;">Tên</th>
                                    <th  style="color:#000000;">Tuổi</th>
                                    <th  style="color:#000000;">SĐT</th>
                                    <th  style="color:#000000;">Email</th>
                                    <th  style="color:#000000;">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lstNumbers as $number)
                                    <tr class="">
                                        <td  style="color:#000000;">{{ $number->id }}</td>
                                        <td  style="color:#000000;">{{ $number->name }}</td>
                                        <td  style="color:#000000;">{{ $number->age }}</td>
                                    	<td  style="color:#000000;">{{ $number->phoneNumber }}</td>
                                    	<td  style="color:#000000;">{{ $number->email }}</td>
                                    	<td  style="color:#000000;">{{ $number->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

  </section>
  </section>
@endsection