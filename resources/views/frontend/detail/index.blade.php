@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
            <li><a href="{{ route('cate-parent', $loaiDetail->slug) }}" title="{!! $loaiDetail->name !!}">{!! $loaiDetail->name !!} </a></li>
            <li><a href="{{ route('cate', [$loaiDetail->slug, $cateDetail->slug]) }}" title="{!! $cateDetail->name !!}">{!! $cateDetail->name !!} </a></li>
            <li class="active">{!! $detail->name !!}</li>
        </ul>
    </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-sm-9 col-xs-12 block-col-main">
            <div class="block-title-commom block-detail">
                <div class="block-content">
                    <div class="block row">
                        <div class="col-sm-5">
                            <div class="block block-slide-detail">
                                <!-- Place somewhere in the <body> of your page -->
                                <div id="slider" class="flexslider">
                                    <ul class="slides slides-large">
                                        @foreach( $hinhArr as $hinh )
                                        <li><img src="{{ Helper::showImage($hinh['image_url']) }}" alt=" hinh anh {!! $detail->name !!}" /></li>
                                        @endforeach                                        
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                        <?php $i = 0; ?>
                                        @foreach( $hinhArr as $hinh )
                                        <li><img src="{{ Helper::showImageThumb($hinh['image_url']) }}" alt="thumb {!! $detail->name !!}"  /></li>
                                        <?php $i++; ?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!-- /block-slide-detail -->
                        </div>
                        <div class="col-sm-7">
                            <div class="block-page-common clearfix">
                                <div class="block block-title">
                                    <h1 class="title-main">{!! $detail->name !!}</h1>
                                </div>
                                <div class="block-content">

                                    <div class="block block-product-options clearfix">
                                        <div class="bl-modul-cm bl-code">
                                            <p class="title">Mã sản phẩm:</p>
                                            <p class="des">{!! $detail->code !!}</p>
                                        </div>
                                        @if( $detail->is_sale == 1)
                                        <div class="bl-modul-cm bl-price">
                                            <p class="title">Giá giảm:</p>
                                            <p class="des">{!! number_format($detail->price_sale) !!}đ</p>
                                        </div>
                                        <div class="bl-modul-cm bl-price-old">
                                            <p class="title">Giá gốc:</p>
                                            <p class="des">{!! number_format($detail->price) !!}đ</p>
                                        </div>
                                        @else
                                        <div class="bl-modul-cm bl-price">
                                            <p class="title">Giá giảm:</p>
                                            <p class="des">{!! number_format($detail->price) !!}đ</p>
                                        </div>
                                        @endif
                                        <div class="bl-modul-cm bl-color">
                                            <p class="title">Màu sản phẩm:</p>
                                            <div class="des">
                                                <ul class="cl-list">
                                                    <li class="color_01" style="background:{!! $detail->color->color_code !!};"><a href="#"></a></li></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php 
                                        $sessionArr = Session::get('products');
                                        $quantity = isset($sessionArr[$detail->id]) ? $detail->inventory - $sessionArr[$detail->id] : $detail->inventory;    
                                        ?>
                                        @if( $quantity > 0 )
                                        <div class="bl-modul-cm bl-qty">
                                            <p class="title">Chọn số lượng:</p>
                                            <div class="des">
                                                <select name="" class="prod_qty" id="quantity">
                                                    @for($i = 0; $i < $quantity ; $i++)
                                                    <option value="{{ $i + 1 }}">{!! $i + 1 !!}</option>>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        @if( $detail->description )
                                        <div class="bl-modul-cm bl-desc">
                                            <span class="lb-txt">Mô tả ngắn:</span>
                                            {!! $detail->description !!}
                                        </div>
                                        @endif
                                    </div><!-- /block-datail-if -->

                                    <div class="block block-share" id="share-buttons">
                                        <div class="share-item">
                                            <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        </div>
                                        <div class="share-item" style="max-width: 65px;">
                                            <div class="g-plus" data-action="share"></div>
                                        </div>
                                        <div class="share-item">
                                            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={!! $detail->title !!}"></a>
                                        </div>
                                        <div class="share-item">
                                            <div class="addthis_inline_share_toolbox share-item"></div>
                                        </div>
                                    </div><!-- /block-share-->
                                    <div class="block-btn-addtocart">
                                        @if( $quantity > 0 && $detail->price > 0 )
                                        <button type="button" data-id="{{ $detail->id }}" class="btn btn-addcart-product btn-main">MUA NGAY</button>
                                        @else
                                        <button type="button" class="btn btn-default btn-order-contact">LIÊN HỆ</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if( $detail->content )
                    <div class="block block-datail-atc block-page-common">
                        <div class="block block-title">
                            <h2 class="title-main">THÔNG TIN CHI TIẾT SẢN PHẨM</h2>
                        </div>
                        <div class="block-content block-editor-content">
                           {!! $detail->content !!}
                        </div>
                    </div>
                    @endif
                    @if ($otherList->count() > 0)
                    <div class="block-datail-atc block-page-common">
                        <div class="block block-title">
                            <h2 class="title-main">SẢN PHẨM LIÊN QUAN</h2>
                        </div>
                        <div class="block-content product-list">
                            <ul class="owl-carousel owl-theme owl-style2" data-nav="true" data-dots="false" data-autoplay="true" data-autoplayTimeout="500" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":3},"800":{"items":3},"992":{"items":4}}'>
                                <?php $i = 0;?>
                                @foreach($otherList as $obj)
                                <?php $i++; ?>
                                <li class="product-item">
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
                                </li>                               
                                @endforeach 
                                         
                                       
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div><!-- /block-detail -->
        </div><!-- /block-col-left -->
        @include ('frontend.cate.sidebar')

        

    </div>
</div><!-- /block_big-title -->

@stop
@section('js')
    <!-- Js zoom -->
    <script src="{{ URL::asset('public/assets/lib/jquery.zoom.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ URL::asset('public/assets/lib/flexslider/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
           // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: false,
            itemWidth: 75,
            itemMargin: 15,
            nextText: "",
            prevText: "",
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            animationSpeed: 500,
            sync: "#carousel"
        });

        $('.slides-large li').each(function () {
            $(this).zoom();
        });
        });

    </script>
@stop