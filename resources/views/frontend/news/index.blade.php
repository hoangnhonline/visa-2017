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