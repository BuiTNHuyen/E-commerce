@extends('layouts.app_master_user')
@section('css')
    <style>
		<?php $style = file_get_contents('css/user.min.css');echo $style;?>
    </style>
@endsection
@section('content')
    <section>
        <div class="title">Danh sách sản phẩm yêu thích</div>
        <div class="row mb-5">
           <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th class="w-25" scope="col">Tên sản phẩm</th>
                            <th scope="col" style="text-align: center;">Danh mục</th>
                            <th scope="col" style="text-align: center;">Ảnh sản phẩm</th>
                            <th scope="col" style="text-align: center;">Giá</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                            <tr>
                                
                                <th>{{ $item->pro_name }}</th>
                                <th>
                                    <span class="label label-success">{{ $item->category->c_name ?? "[N\A]" }}</span>
                                </th>
                                <th>
                                    <img src="{{ pare_url_file($item->pro_avatar) }}" style="width: 80px;height: 100px">
                                </th>
                                <th>{{ number_format($item->pro_price,0,',','.') }} đ</th>
                                <th>
                                    <a class="btn btn-purple" href="{{  route('get.user.favourite.delete', $item->id) }}">Huỷ bỏ</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
        </div>
    </section>
@endsection
