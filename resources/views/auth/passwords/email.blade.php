@extends('layouts.app_master_frontend')
@section('css')
    <style>
		<?php 
            $style = file_get_contents('css/auth.min.css');
            echo $style;
        ?>
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li itemscope="" >
                    <a itemprop="url" href="/" title=""><span itemprop="title">Trang chủ</span></a>
                </li>
                <li itemscope="" >
                    <a itemprop="url" href="" title=""><span itemprop="title">Account</span></a>
                </li>

                <li itemscope="" >
                    <a itemprop="url" href="" title=""><span itemprop="title">Reset Password</span></a>
                </li>

            </ul>
        </div>
        <div class="auth" style="background: white;">
            <form class="from_cart_register" action="" method="post" style="width: 500px;margin:0 auto;padding: 30px 0">
                @csrf
                <div class="form-group">
                    <label for="name">Email <span class="cRed">(*)</span></label>
                    <input name="email" id="email" required="" type="email" class="form-control" placeholder="Nhập email">
                    @if ($errors->first('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-purple btn-xs">Gửi xác nhận</button>
                </div>
            </form>
        </div>
    </div>
@endsection
