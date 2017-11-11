@extends('frontend.layout')

@include('frontend.partials.meta')

@section('content')
<div id="slidebanner">
        <div id="searchBox">            
  <div id="searchBox">
    <div class="inner">
      <h3 class="text-center @if($isEdit) edit @endif" data-text="4">{!! $textList[4] !!}</h3>
      <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <select type="text" data-placeholder="Bạn muốn xin visa đi đâu ?" name="search" id="searchSelect" class="form-control">
          <option value=""></option>
          @foreach($cateListDefault as $cate)
          <option value="{{ $cate->id }}">{!! $cate->name !!}</option>
          @endforeach
          
        </select>
        <div class="input-group-btn hidden-xs"> 
            <button type="submit" class="btn btn-success dropdown-toggle submitButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button></div>
      </div>
      <div class="searchTags hidden-sm hidden-xs">
         @foreach($cateListDefault as $cate)
         @if($cate->is_hot == 1)
         <a href="#">{!! $cate->name !!}</a>
         @endif
        @endforeach
      </div>
    </div>
  </div>
        </div><!-- /searchBox -->
        <div id="slideBt" class="hidden-sm hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3"> <span @if($isEdit) class="edit" @endif" data-text="6">{!! $textList[6] !!}</span> Năm kinh nghiệm trong xin Visa</div>
          <div class="col-lg-3 col-md-3"> <span @if($isEdit) class="edit" @endif" data-text="8">{!! $textList[8] !!}</span> Khách hàng hài lòng</div>
          <div class="col-lg-3 col-md-3"> <span @if($isEdit) class="edit" @endif" data-text="10">{!! $textList[10] !!}</span> Tư vấn miễn phí</div>
          <div class="col-lg-3 col-md-3"> <span @if($isEdit) class="edit" @endif" data-text="12">{!! $textList[12] !!}</span> Tỷ lệ đậu Visa cao</div>
        </div>
      </div>
    </div><!-- /slideBt -->
    <div id="heartbanner-slide">
        <img src="https://visana.vn/wp-content/themes/twentyseventeen/assets/img/bg-top.jpg">
    </div><!-- /heartbanner-slide -->
    </div><!-- /slidebanner -->

    <div class="section" id="whyme">
<div class="container">
  <div class="hdWiget text-center">
    <h2 @if($isEdit) class="edit" @endif" data-text="14">{!! $textList[14] !!}</h2>
  </div>
  <p style="text-align: justify;" @if($isEdit) class="edit" @endif" data-text="15">{!! $textList[15] !!}</p>
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <h3 @if($isEdit) class="edit" @endif" data-text="16">{!! $textList[16] !!}</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w1.png') }}" alt="thu tuc visana"></span></div>
      <p @if($isEdit) class="edit" @endif" data-text="17">{!! $textList[17] !!}</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3 @if($isEdit) class="edit" @endif" data-text="18">{!! $textList[18] !!}</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w2.png') }}" alt="ho tro visana"></span></div>
      <p @if($isEdit) class="edit" @endif" data-text="19">{!! $textList[19] !!}</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3 @if($isEdit) class="edit" @endif" data-text="20">{!! $textList[20] !!}</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w3.png') }}" alt="xu ly visana"></span></div>
      <p @if($isEdit) class="edit" @endif" data-text="21">{!! $textList[21] !!}</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3 @if($isEdit) class="edit" @endif" data-text="22">{!! $textList[22] !!}</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w4.png') }}" alt="dich vu visana"></span></div>
      <p @if($isEdit) class="edit" @endif" data-text="23">{!! $textList[23] !!}</p>
    </div>
  </div>
  <div class="video hide">
    <div class="youtube-player" data-id="irMX6jzyJYk">
      <img src="{{ URL::asset('public/assets/imgs/Capture.jpg') }}">
      <div class="play"></div>
    </div>
  </div>
</div>
</div><!-- /whyme -->

<div class="section" id="stepVisa">
<div class="container">
  <div class="hdWiget text-center">
    <h2 @if($isEdit) class="edit" @endif" data-text="24">{!! $textList[24] !!}</h2>
    <p @if($isEdit) class="edit" @endif" data-text="25">{!! $textList[25] !!}</p>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">01</span> <img src="{{ URL::asset('public/assets/imgs/s1.jpg') }}" alt="visana step 1">
      <h3 @if($isEdit) class="edit" @endif" data-text="26">{!! $textList[26] !!}</h3>
      <p @if($isEdit) class="edit" @endif" data-text="27">{!! $textList[27] !!}</p>
    </div>
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">02</span> <img src="{{ URL::asset('public/assets/imgs/s2.jpg') }}" alt="visana step 2">
      <h3 @if($isEdit) class="edit" @endif" data-text="28">{!! $textList[28] !!}</h3>
      <p @if($isEdit) class="edit" @endif" data-text="29">{!! $textList[29] !!}</p>
    </div>
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">03</span> <img src="{{ URL::asset('public/assets/imgs/s3.jpg') }}" alt="visana step 3">
      <h3 @if($isEdit) class="edit" @endif" data-text="30">{!! $textList[30] !!}</h3>
      <p @if($isEdit) class="edit" @endif" data-text="31">{!! $textList[31] !!}</p>
    </div>
  </div>
  <div class="row hidden-sm hidden-xs">
    <div class="col-lg-4 col-md-4">
      <ul>
        <li @if($isEdit) class="edit" @endif" data-text="32">{!! $textList[32] !!}</li>
        <li @if($isEdit) class="edit" @endif" data-text="33">{!! $textList[33] !!}</li>
        <li @if($isEdit) class="edit" @endif" data-text="34">{!! $textList[34] !!}</li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-4">
      <ul>
        <li @if($isEdit) class="edit" @endif" data-text="35">{!! $textList[35] !!}</li>
        <li @if($isEdit) class="edit" @endif" data-text="36">{!! $textList[36] !!}</li>
        <li @if($isEdit) class="edit" @endif" data-text="37">{!! $textList[37] !!}h</li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-4">
      <ul>
        <li @if($isEdit) class="edit" @endif" data-text="38">{!! $textList[38] !!}p</li>
        <li @if($isEdit) class="edit" @endif" data-text="39">{!! $textList[39] !!}</li>
        <li @if($isEdit) class="edit" @endif" data-text="40">{!! $textList[40] !!}</li>
      </ul>
    </div>
  </div>
</div>
</div><!-- stepVisa -->    

<div id="map">
<div class="contactForm">
  <div class="container">
    <div class="inner">
      <h3 class="text-center @if($isEdit) edit @endif" data-text="41">{!! $textList[41] !!}</h3>
      <button type="button" class="contact-toggle btn-block" data-toggle="collapse" data-target=".collapse-contact">
        <span class="fa fa-chevron-down"></span>
      </button>
      <div role="form" id="" lang="en-US" dir="ltr">
        <div class="screen-reader-response"></div>
        <form action="#" method="post" class="" novalidate="novalidate">
          <div>
            <span class="form-control-wrap fullname">
                <input type="text" name="fullname" value="" size="40" class="form-control text validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ tên" />
            </span>
          </div>
          <div>
            <span class="form-control-wrap phone">
                <input type="tel" name="phone" value="" size="40" class="form-control text tel validates-as-required validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" />
            </span>
          </div>
          <div>
            <span class="form-control-wrap your-email">
                <input type="email" name="your-email" value="" size="40" class="form-control text email validates-as-required validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
            </span>
          </div>
          <div>
            <span class="form-control-wrap content">
                <textarea name="content" cols="40" rows="10" class="form-control textarea" aria-invalid="false" placeholder="Nội dung"></textarea>
            </span>
          </div>
          <div>
            <input type="submit" value="Đăng ký tư vấn" class="submit btn btn-contact btn-lg" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<object class="mymap" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126263.60819855973!2d-84.44808690325613!3d33.735934882617194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQ0JzQ1LjQiTiA4NMKwMjMnMzUuMyJX!5e0!3m2!1svi!2s!4v1475105845390"></object>
</div><!-- map -->

<div class="section" id="news">
<div class="container">
  <div class="hdWiget text-center">
    <h2 @if($isEdit) class="edit" @endif" data-text="42">{!! $textList[42] !!}</h2>
  </div>
  <div class="row">
    @if($articlesList)
    @foreach($articlesList as $articles)
    <div class="col-lg-3 col-md-3">
      <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">
        <img width="270" height="190" src="{{ Helper::showImage($articles->image_url) }}">          
      </a>
      <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">{!! $articles->title !!}</a>
      <p>Ngày đăng: {{ date('d/m/Y', strtotime($articles->created_at)) }}</p>
    </div>
    @endforeach
    @endif    
  </div>
  <p class="text-center"><a href="#" class="btn btn-default btn-viewall">Xem tất cả</a></p>
</div>
</div><!-- news -->
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        jQuery('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            dots: false
        });
    });
</script>
@stop