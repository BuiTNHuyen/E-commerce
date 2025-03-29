@extends('layouts.app_master_frontend')

@section('css')
    @php
        $display_menu = config('layouts.component.cate.home.display');
//    @endphp
    <style>
        <?php $style = file_get_contents('css/home_insights.min.css');echo $style;?>
        #menu-main {
            display: '{{ $display_menu }}';
        }

        /* styles.css */
body {
    font-family: Arial, sans-serif;
}

nav {
    width: 100%;
    background-color: #2196f3;
    text-align: center; /* Không cần sử dụng !important */
}

.menu-1 {
    width: 100%;
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; /* Căn giữa các mục menu theo chiều ngang */
}

.menu-1 > li {
    position: relative;
}

.menu-1 > li > a {
    display: flex;
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: center; /* Căn giữa theo chiều ngang */
    padding: 10px 60px;
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.menu-1 > li > a:hover,
.submenu li a:hover {
    background-color: #50abf7;
    color: white;
}

.submenu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background-color: white;
    z-index: 100;
    list-style: none;
    padding: 0;
    margin: 0;
}

.submenu li {
    position: relative;
}

.submenu li a {
    display: block;
    padding: 10px 20px;
    color: black;
    text-decoration: none;
    white-space: nowrap;
    text-align: center; /* Căn giữa theo chiều ngang */
}

.menu-1 > li:hover > .submenu,
.submenu li:hover > .submenu {
    display: block;
}

.submenu .submenu {
    left: 100%;
    top: 0;
}


    </style>
@endsection

@section('content')
    <div class="component-slide">
        @if (config('layouts.pages.home.slide.with') == 'full')
            <div id="content-slide">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        @else
            <div class="container" style="display: flex">
                <div class="left" style="width: 250px">

                </div>
                <div class="right" style=" width: calc(100% - 250px);">
                    <div id="content-slide">
                        <div class="spinner">
                            <div class="rect1"></div>
                            <div class="rect2"></div>
                            <div class="rect3"></div>
                            <div class="rect4"></div>
                            <div class="rect5"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="menu col-sm-12 col-md-12"  >
        
        <nav>
            <ul class="menu-1" style="text-align: center">
                <li><a href="http://127.0.0.1:8000"><center>Trang chủ</center></a></li>
                <li><a href="http://127.0.0.1:8000/san-pham">Sản phẩm</a></li>
                <li><a href="http://127.0.0.1:8000/bai-viet">Bài viết</a></li>
                <li><a href="http://127.0.0.1:8000/lien-he">Liên hệ</a></li>
                <!-- <li><a href="http://127.0.0.1:8000/">Chính sách</a></li> -->
            </ul>
        </nav>

    </div>
    <div class="container" id="before-slide">
        
        <div class="product-one">
            <div class="top">
                <a href="#" title="" class="main-title">SẢN PHẨM BÁN CHẠY</a>

            </div>
            <div class="bot">

                @if ($event1)
                <div class="left">
                    <div class="image">
                        <a href="{{  $event1->e_link }}" title="" class="{{ $event1->e_name }}" target="_blank">
                            <img style="height: 310px;" class="lazyload lazy" alt="{{ $event1->e_name }}" src="{{  asset('images/preloader.gif') }}"  data-src="{{  pare_url_file($event1->e_banner) }}" />
                        </a>
                    </div>
                </div>
                @endif
                <div class="right js-product-one owl-carousel owl-theme owl-custom">
                    @foreach($productsPay as $product)
                        <div class="item">
                            @include('frontend.components.product_item',[ 'product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if ($event2)
            @include('frontend.pages.home.include._inc_flash_sale')
        @endif

        {{-- <div class="product-two">
            <div class="top">
            </div>
            <div class="bot">
                @for($i=0; $i < 4; $i++)
                    <div class="item">
                        @include('frontend.components.product_item')
                    </div>
                @endfor
            </div>
        </div> --}}

        <div class="product-three">
            <div class="top">
                <a href="#" title="" class="main-title">SẢN PHẨM MỚI</a>
            </div>
            <div class="bot">
                <!-- <div class="left">
                    <div class="image">
                        @if (isset($event3->e_link))
                            <a href="{{  $event3->e_link }}" title="" class="{{ $event3->e_name }}" target="_blank">
                                <img style="height: 310px;" class="lazyload lazy" alt="{{ $event3->e_name }}" src="{{  asset('images/preloader.gif') }}"  data-src="{{  pare_url_file($event3->e_banner) }}" />
                            </a>
                        @endif
                    </div> 
                </div> -->
                <div class="right js-product-one owl-carousel owl-theme owl-custom">
                    @if (isset($productsNew))
                        @foreach($productsNew as $product)
                            <div class="item">
                                @include('frontend.components.product_item',['product' => $product])
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="product-two">
            <div class="top">
                <a href="#" class="main-title">SẢN PHẨM NỔI BẬT</a>
            </div>
            <div class="bot">
                @if (isset($productsHot))
                    @foreach($productsHot as $product)
                        <div class="item">
                            @include('frontend.components.product_item',['product' => $product])
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-two" id="product-recently"></div>
        <div id="user-data" data-user='@json($user)'></div>
        @include('frontend.pages.home.include._inc_article')
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        var routeRenderProductRecently  = '{{ route('ajax_get.product_recently') }}';
        var routeRenderProductByCategory  = '{{ route('ajax_get.product_by_category') }}';
        var routeRenderSlide  = '{{ route('ajax_get.slide') }}';
        var CSS = "{{ asset('css/home.min.css') }}";
		<?php $js = file_get_contents('js/home.js');echo $js;?>
        document.addEventListener("DOMContentLoaded", () => {
            sessionStorage.setItem("current_user", JSON.stringify(document.getElementById('user-data').dataset.user));
            sessionStorage.setItem("current_admin", "");
        });
    </script>
@endsection
