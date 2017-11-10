@extends('frontend.layout') 

@include('frontend.partials.meta') 

@section('content')
      
    <div id="hdPage">
      <div class="text-center">
        <ul class="breadcrumb">
          <li><a href="{{ route('home') }}">Trang chủ</a></li>
          <li>Blog du lịch</li>
        </ul>
        <h2>{!! str_replace('Visa đi', '', $cateDetail->name) !!}</h2>
      </div>
      <img src="{{ Helper::showImage($cateDetail->image_url) }}" alt="{!! $cateDetail->name !!}">
    </div><!-- /hdPage -->

    <div class="section" id="blogs">
      <div class="container">
        <div class="row">
          @includ('frontend.news.sidebar')
          <div class="col-lg-9 col-md-9">
            <div class="row">        
        
             @foreach($articlesList as $articles)
              <div class="col-sm-6 col-xs-12">
                <div class="blogList">
                  <div class="thumb">
                    <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">
                      <img style="width: 100%" src="{{ Helper::showImage($articles->image_url) }}" alt="{!! $articles->title !!}">
                    </a>
                  </div><!-- /thumb -->
                  <h2><a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">{!! $articles->title !!}</a></h2>                  
                </div><!-- /blogList -->
              </div>
              @endforeach
            </div>
            <!--<nav id="pagination">
              <ul class="pagination">
                <li class="active"><a href="https://visana.vn/blog/">1</a></li>
                <li><a href="https://visana.vn/blog/page/2/">2</a></li>
                <li><a href="https://visana.vn/blog/page/3/">3</a></li>
                <li><a>...</a></li>
                <li><a href="https://visana.vn/blog/page/38/">38</a></li>
                <li><a href="https://visana.vn/blog/page/2/"><span class="hidden-xs">Sau&nbsp;&nbsp;</span><span class="fa fa-arrow-circle-right"></span></a></li>
              </ul>
            </nav><!-- /pagination -->
          </div><!-- /col-lg-9 col-md-9 -->
        </div>
      </div>
    </div><!-- /blogs -->
    @stop