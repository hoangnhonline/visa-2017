@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>        
        <li class="active">{!! $cateDetail->name !!}</li>
    </ul>
    </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
    <div class="row">
        <div class="col-sm-9 col-xs-12 block-col-main">
            <div class="block-page-common clearfix">
                <div class="block block-title">
                    <h1 class="title-main">{!! $cateDetail->name !!}</h1>
                </div>
                <div class="block-content">
                    <div class="product-list">
                        <div class="row">
                            @if($productList)
                            @foreach($productList as $obj)
                            <div class="col-sm-3 col-xs-6">
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
                            </div>
                            @endforeach
                            @endif 
                        </div>

                        <nav class="block-pagination">
                            {{ $productList->appends(['pid' => $parent_id, 'p' => $price_id, 'keyword' => $tu_khoa, 'color' => $colorArr])->links() }}  
                        </nav><!-- /block-pagination -->
                    </div>
                </div>
            </div><!-- /block-ct-news -->
        </div><!-- /block-col-right -->
        @include('frontend.cate.sidebar')
    </div>
</div><!-- /block_big-title -->
@stop
@section('js')

@stop