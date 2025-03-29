@extends('layouts.app_master_frontend')
@section('css')
    <style>
		<?php $style = file_get_contents('css/product_insights.min.css');echo $style;?>
        .filter-tab .active a {
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="product-list">
            <div class="left">
                @include('frontend.pages.product.include._inc_sidebar')
            </div>
            <div class="right">
                <div class="breadcrumb">
                    <ul>
                        <li >
                            <a itemprop="url" href="/" title=""><span itemprop="title">Trang chủ</span></a>
                        </li>
                    </ul>
                </div>
                
                {{-- {{  dd($products) }} --}}
                <div class="order-tab">
                    <span class="total-prod">Tổng số: {{ $products->total() }} sản phẩm</span>
                    <div class="sort">
                        
                    </div>
                </div>
                <div class="group">
                    @foreach($products as $product)
                        @include('frontend.components.product_item', ['product' => $product])
                    @endforeach
                </div>
                <div style="display: block;">
                    {!! $products->appends($query ?? [])->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
		var CSS = "{{ asset('css/product_search.min.css') }}";
    </script>
    <script type="text/javascript">
		<?php $js = file_get_contents('js/product_search.js');echo $js;?>
    </script>
@endsection
