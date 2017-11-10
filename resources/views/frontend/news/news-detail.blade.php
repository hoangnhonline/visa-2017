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
      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <aside id="secondary" class="widget-area" role="complementary">

          <section id="search-2" class="widget widget_search">
            <form role="search" method="get" class="search-form" action="https://visana.vn/">
              <label for="search-form-59f946a465669">
                <span class="screen-reader-text">Search for:</span>
              </label>
              <input type="search" id="search-form-59f946a465669" class="search-field" placeholder="Search …" value="" name="s">
              <button type="submit" class="search-submit btn btn-default"></button>
            </form>
          </section><!-- /search-2 -->

          <section id="categories-2" class="widget widget_categories">
            <h2 class="widget-title">Danh mục</h2>
            <ul>
              @foreach($cateListDefault as $cate)
              <li class="cat-item">
                <a href="{{ route('news-list', [str_replace('visa-di', 'du-lich', $cate->slug )]) }}" >{!! str_replace('Visa đi', '', $cate->name ) !!}</a>
              </li>
              @endforeach
            </ul>
          </section><!-- /categories-2 -->

          <section id="recent-posts-2" class="widget widget_recent_entries">
            <h2 class="widget-title">Bài viết gần đây</h2>
            <ul>
               @foreach($recentList as $articles)
                <li>
                  <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">{!! $articles->title !!}</a>
                  <span class="post-date">{!! date('d/m/Y', strtotime($articles->created_at)) !!}</span>
                </li>
                @endforeach
             
            </ul>
          </section><!-- /recent-posts-2 -->

        </aside><!-- /secondary -->
      </div><!-- /col-lg-3 col-md-3 -->
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