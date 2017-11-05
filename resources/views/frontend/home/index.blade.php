@extends('frontend.layout')

@include('frontend.partials.meta')

@section('content')
<article>    
     <?php 
    $bannerArr = DB::table('banner')->where(['object_id' => 1, 'object_type' => 3])->orderBy('display_order', 'asc')->get();   
    ?>
    <section class="block-slide marg40">
        @if($bannerArr)
        <div class="owl-carousel owl-theme">            
            <?php $i = 0; ?>
            @foreach($bannerArr as $banner)
            <?php $i++; ?>
            <div class="item">
            @if($banner->ads_url !='')
            <a href="{{ $banner->ads_url }}" title="banner slide {{ $i }}">
            @endif
            <img src="{{ Helper::showImage($banner->image_url) }}" alt="banner slide {{ $i }}">
            @if($banner->ads_url !='')
            </a>
            @endif
            </div><!-- item-banner -->
            @endforeach
        </div>
        @endif
    </section>
    <section id="welcome" class="marg40">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-section @if($isEdit) edit @endif" data-text="1" >{!! $textList[1] !!}</div>
                    <p data-text="2" @if($isEdit) class="edit" @endif>{!! $textList[2] !!}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ URL::asset('public/assets/img/hinh-gioi-thieu.png') }}" alt=""/>
                </div>
            </div>
        </div>
    </section><!-- End News -->
    <?php 
    $bannerArr = DB::table('banner')->where(['object_id' => 5, 'object_type' => 3])->orderBy('display_order', 'asc')->get();   
    ?>
    <?php $i = 0; ?>
    @foreach($bannerArr as $banner)
    <?php $i++; ?>
    <section class="block-image marg40">
    @if($banner->ads_url !='')
    <a href="{{ $banner->ads_url }}" title="banner slide {{ $i }}">
    @endif
    <img src="{{ Helper::showImage($banner->image_url) }}" alt="banner slide {{ $i }}">
    @if($banner->ads_url !='')
    </a>
    @endif
    </section>
    @endforeach    
    <section id="service-us" class="marg40">
        <div class="container">
            <div class="title-section text-center @if($isEdit) edit @endif" data-text="3">{!! $textList[3] !!}</div>
            <p class="text-center @if($isEdit) edit @endif" data-text="4">{!! $textList[4] !!}</p>
        </div>
        <div class="container clearfix">
            @foreach($servicesList as $services)
            <div class="item-service">
                <a href="{{ $services->url }}" title="{!! $services->title !!}">
                    <div class="image"><img src="{{ Helper::showImage($services->image_url) }}" alt="{!! $services->title !!}"/></div>
                    <h2>{!! $services->title !!}</h2>
                </a>
            </div>
            @endforeach
        </div>
    </section><!-- End -->
</article>
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