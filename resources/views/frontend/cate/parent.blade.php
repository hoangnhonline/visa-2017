@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
           <li><a href="{{ route('home') }}">Trang chủ</a></li>        
            <li class="active">{!! $parentDetail->name !!}</li>
        </ul>
    </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-xs-12 block-col-main">
            <div class="block-page-common clearfix">
                <div class="block block-title tit-more">
                    <h1 class="title-main">{!! $parentDetail->name !!}</h1>
                    @if($parentDetail->description)
                    <p class="desc text-center">
                       {!! $parentDetail->description !!}
                    </p>
                    @endif
                </div>
                @if($cateList)
                @foreach($cateList as $cate)
                @if(isset($productArr[$cate->id]) && count($productArr[$cate->id]) > 0 )
                <div class="block-content">
                    <div class="box-title-cate-prod">
                        <i class="fa fa-heart"></i> <h3>{!! $cate->name !!}</h3>                        
                        <a href="{{ route('cate', [ $parentDetail->slug, $cate->slug ]) }}" class="readmore btn-main">Xem chi tiết <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="product-list">

                        <div class="owl-carousel owl-theme owl-style2" data-nav="true" data-margin="30" data-items='5' data-autoplayTimeout="500" data-autoplay="false" data-loop="false" data-navcontainer="true" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":3},"800":{"items":3},"992":{"items":5}}'>
                            @foreach($productArr[$cate->id] as $obj)
                            <div class="product-item">
                                <div class="product-img">
                                    <p class="box-ico">
                                        @if( $obj->is_new == 1)
                                        <span class="ico-new ico">NEW</span>
                                        @endif
                                        @if( $obj->is_sale == 1 && $obj->sale_percent > 0 )
                                        <span class="ico-sales ico">-{{ $obj->sale_percent }}%</span>
                                        @endif
                                    </p>
                                    <a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">
                                        <img src="{!! Helper::showImageThumb( $obj->image_url ) !!}" class="img-1" alt="{!! $obj->name !!}">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h2 class="title"><a href="{{ route('product', [$obj->slug]) }}" title="{!! $obj->name !!}">{!! $obj->name !!}</a></h2>
                                    <div class="product-price">
                                        <span class="label-txt">Giá:</span> <span class="price-new">
                                            @if($obj->is_sale == 1 && $obj->price_sale > 0)
                                            {{ number_format($obj->price_sale) }}đ
                                            @else
                                                {{ number_format($obj->price) }}đ
                                            @endif  
                                        </span>
                                        @if( $obj->is_sale == 1)
                                        <span class="price-old">{{ number_format($obj->price) }}đ</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                @endif
                @endforeach
                @endif

            </div>                      
        </div><!-- /block-ct-news -->
    </div><!-- /block-col-left -->
</div><!-- /block_big-title -->
@stop