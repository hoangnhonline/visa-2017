@extends('frontend.layout')

@include('frontend.partials.meta')  
  
@section('content')
<?php 
$bannerArr = DB::table('banner')->where(['object_id' => 1, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
?>
@if($bannerArr)
<div class="block block-side">
    <div class="owl-carousel owl-style2" data-nav="true" data-margin="0" data-items='1' data-autoplayTimeout="1000" data-autoplay="true" data-loop="true" data-navcontainer="true">
      <?php $i = 0; ?>
      @foreach($bannerArr as $banner)
      <?php $i++; ?>
      <div class="item-slide">
        @if($banner->ads_url !='')
        <a href="{{ $banner->ads_url }}" title="banner slide {{ $i }}">
        @endif
        <img src="{{ Helper::showImage($banner->image_url) }}" alt="slide {{ $i }}">
        @if($banner->ads_url !='')
        </a>
        @endif
      </div>
      @endforeach   
    </div>
  </div><!-- /block-side -->
@endif
  <div class="block block-title-cm block-categories-home">
    <div class="container">
      <div class="block-title">
        <h2 data-text="1" @if($isEdit) class="edit" @endif>{!! $textList[1] !!}</h2>
        <p data-text="2" class="desc @if($isEdit) edit @endif">{!! $textList[2] !!}</p>
      </div>
      <div class="block-cate-product">
        <div class="row">
          @foreach( $cateParentHot as $obj )
          <div class="col-sm-3">
            <div class="cate-item">
              <figure class="box-thumb">
                <a href="{!! route( 'cate-parent', $obj->slug ) !!}" title="{!! $obj->name !!}"><img src="{{ Helper::showImage( $obj->image_url ) }}" alt="{!! $obj->name !!}"></a>
              </figure>
              <figcaption class="box-caption">
                <h2 class="cate-name"><a href="{!! route( 'cate-parent', $obj->slug ) !!}" title="{!! $obj->name !!}">{!! $obj->name !!}</a></h2>
                <p class="cate-desc">{!! $obj->description !!}</p>
                <p class="cate-btn"><a href="{!! route( 'cate-parent', $obj->slug ) !!}">Xem chi tiết</a></p>
              </figcaption>
            </div>
          </div><!-- /item -->
          @endforeach
        </div>
      </div>
    </div>
  </div><!-- /block_big-title -->
<?php 
$bannerArr = DB::table('banner')->where(['object_id' => 2, 'object_type' => 3])->orderBy('display_order', 'asc')->get();
?>
@if($bannerArr)  
  <?php $i = 0; ?>
  @foreach($bannerArr as $banner)
  <?php $i++; ?>
  <div class="block block-banner">
    @if($banner->ads_url !='')
    <a href="{{ $banner->ads_url }}" title="banner slide {{ $i }}">
    @endif
    <img src="{{ Helper::showImage($banner->image_url) }}" alt="slide {{ $i }}">
    @if($banner->ads_url !='')
    </a>
    @endif
  </div><!-- /block-banner -->
  @endforeach
@endif
  <div class="block block-title-cm">
    <div class="container">
      <div class="block-title">
        <h2 data-text="3" @if($isEdit) class="edit" @endif>{!! $textList[3] !!}</h2>
        <p data-text="4" class="desc @if($isEdit) edit @endif">{!! $textList[4] !!}</p>
      </div>
      <div class="block-news-home">
        <div class="row">
          @foreach( $articlesHotList as $obj )
          <div class="col-sm-3">
            <div class="news-item">
              <figure class="box-thumb">
                <a href="{!! route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ]) !!}" title="{!! $obj->title !!}"><img src="{{ Helper::showImage( $obj->image_url ) }}" alt="{!! $obj->title !!}"></a>
              </figure>
              <figcaption class="box-caption">
                <h2 class="news-title"><a href="{!! route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ]) !!}" title="{!! $obj->title !!}">{!! $obj->title !!}</a></h2>
                <p class="news-meta"><i class="fa fa-calendar"></i> 20/09/2017</p>
                <p class="news-desc">{!! $obj->description !!}</p>
              </figcaption>
              <p class="news-btn"><a href="{!! route('news-detail', [$obj->cate->slug, $obj->slug, $obj->id ]) !!}">Xem chi tiết</a></p>
            </div>
          </div><!-- /item -->
          @endforeach
        </div>
      </div>
    </div>
  </div><!-- /block_big-title -->
@stop