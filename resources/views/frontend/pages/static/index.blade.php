@extends('layouts.app_master_frontend')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog_detail.min.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li >
                    <a href="/" title=""><span itemprop="title">Trang chủ</span></a>
                </li>
                
                <li >
                    <a href="" title=""><span itemprop="title">{{  $page->s_title ?? '' }}</span></a>
                </li>
            </ul>
        </div>
        <div class="blog-main" style="margin-bottom: 20px;">
            <div class="left">
                <div class="post-detail">
                    <div class="post-detail__content">
                        {!! $page->s_content ?? '' !!}
                    </div>

                </div>
            </div>
            <div class="right">
                {{-- @include('frontend.components.articles_hot_sidebar_top',['articles' => $articlesHotSidebarTop])
                @include('frontend.components.top_product',['products' => $productTopPay])
                @include('frontend.components.hot_article',['articles'  => $articlesHot]) --}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/blog_detail.js') }}" type="text/javascript"></script>
@endsection