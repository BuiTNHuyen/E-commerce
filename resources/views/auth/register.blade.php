@extends('layouts.app_master_frontend')
@section('css')
    <style>
		<?php $style = file_get_contents('css/auth.min.css');echo $style;?>
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li>
                    <a itemprop="url" href="/" title=""><span itemprop="title">Trang chủ</span></a>
                </li>
                <li>
                    <a itemprop="url" href="#" title=""><span itemprop="title">Account</span></a>
                </li>

                <li>
                    <a itemprop="url" href="#" title=""><span itemprop="title">Đăng ký</span></a>
                </li>

            </ul>
        </div>
        <div class="auth" style="background: white;">
            <form class="from_cart_register" action="" method="post" style="width: 500px;margin:0 auto;padding: 30px 0">
                @csrf
                <div class="form-group">
                    <label for="name">Name <span class="cRed">(*)</span></label>
                    <input name="name" id="name" type="text" value="{{  old('name') }}" class="form-control" placeholder="Nhập tên của bạn">
                    @if ($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="cRed">(*)</span></label>
                    <input name="email" id="email" type="email" value="{{  old('email') }}" class="form-control" placeholder="Nhập email">
                    @if ($errors->first('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="phone">Password <span class="cRed">(*)</span></label>
                    <input name="password" id="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                    @if ($errors->first('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="phone">Điện thoại <span class="cRed">(*)</span></label>
                    <input name="phone" id="phone" type="tel" value="{{  old('phone') }}" placeholder="Nhập số điện thoại" class="form-control">
                    @if ($errors->first('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-purple">Đăng ký</button>
                    <p>
                        <a href="{{ route('get.email_reset_password') }}">Quên mật khẩu</a>
                        <a href="{{ route('get.login') }}">Đăng nhập</a>
                    </p>
                    @include('auth.include._inc_social')
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        <?php $js = file_get_contents('js/home.js');echo $js;?>
    </script>
@endsection
