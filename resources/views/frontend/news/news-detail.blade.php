@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div id="hdPage">
  <div class="text-center">
    <ul class="breadcrumb">
      <li><a href="{{ route('home') }}">Trang chủ</a></li>
      <li>Blog du lịch</li>
    </ul>
    <h2>{!! $detail->title !!}</h2>
  </div>
  <img src="{{ Helper::showImage($cateDetailProduct->image_url) }}" alt="{!! $cateDetailProduct->name !!}">
</div><!-- /hdPage -->

<div class="section" id="blogs">
  <div class="container">
    <div class="row">
      @include('frontend.news.sidebar')
      <div class="col-lg-9 col-md-9">
        <div class="blogDetail" style="text-align: justify;">
          <h4><span style="color: #999999;"><em>{!! $detail->description !!}</em></span></h4>
          {!! $detail->content !!}
        </div>
      </div><!-- /col-lg-9 col-md-9 -->
    </div>
  </div>
</div><!-- /blogs -->
@stop