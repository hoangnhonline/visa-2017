@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div id="hdPage">
  <div class="text-center">
    <ul class="breadcrumb">
    <li><a href="{{ route('home') }}">Trang chủ</a></li>
    <li>Dịch vụ Visa</li>
    </ul>
    <h1 style="font-size: 60px;">{!! $cateDetail->name !!}</h1>
    </div>
    <img src="{{ Helper::showImage($cateDetail->image_url) }}" alt="{!! $cateDetail->name !!}" title="{!! $cateDetail->name !!}">
    </div><!-- /hdPage -->

    <div class="shadow" style="max-width:1300px; margin:0 auto">
    <div class="service">
    <div class="container">
    <nav>
      <div id="nav-service-wrap">
        <ul class="nav nav-service">
            @foreach($productList as $product)
            <li @if($product->id == $detail->id ) class="active" @endif><a href="{{ route('cate', [$cateDetail->slug, $product->slug ]) }}" rel="bookmark">{!! $product->name !!}</a></li>
            @endforeach
        </ul>
      </div>
    </nav>
    <div class="brief">
      <div class="hdWiget text-center">
        <h2>{!! $detail->description !!}</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          {!! $detail->content !!}
        </div>
        <div class="col-lg-6 col-md-6">
          {!! $detail->content_2 !!}
        </div>
      </div>
      <div class="text-center">
        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#download">
          Tải về hồ sơ chi tiết
          <i class="fa fa-download"></i></button>
      </div>
    </div>
    
    </div>
    </div><!-- /service -->
   <div class="section" id="contact">
          <div class="container">
            <div class="text-center">
              <h2>Bạn cần tư vấn Visa Hàn Quốc ?</h2>
            </div>
            <div class="contactForm">
              <div class="inner">
                <form action="#" method="post" class="form">
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <span class="form-control-wrap fullname">
                        <input type="text" name="fullname" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Họ tên">
                      </span>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <span class="form-control-wrap phone">
                        <input type="tel" name="phone" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Số điện thoại">
                      </span>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <span class="form-control-wrap your-email">
                        <input type="number" name="your-email" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Năm sinh">
                      </span>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="content">
                         <p><strong>Nghề nghiệp</strong></p>
                          <label class="radio-inline">
                            <input type="radio" name="job" value="chodoanhnhiep"> Chủ doanh nghiệp
                          </label>
                          <label class="checkbox-inline">
                            <input type="radio" name="job" value="lamtudo"> Làm tự do
                          </label>
                          <label class="checkbox-inline">
                            <input type="radio" name="job" value="nhanvien"> Nhân viên
                          </label>
                      </div>
                    </div>                   
                    <div class="col-lg-12 col-md-12">
                      <div class="content">
                        <p><strong>Loại visa</strong></p>
                        <label class="radio-inline">
                          <input type="radio" name="job" value="dulichtutuc"> Du lịch
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="job" value="thamthan"> Thăm thân
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="job" value="xkld"> Xuất khẩu lao động
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="job" value="congtac"> Công tác
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="job" value="dinhcu"> Định cư
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <span class="form-control-wrap content">
                        <textarea name="content" cols="40" rows="10" class="form-control" aria-invalid="false" placeholder="Nội dung"></textarea>
                      </span>
                    </div>
                  </div>
                  <input type="submit" value="Đăng ký tư vấn" class="btn btn-contact">
                </form>
              </div>
            </div>
            
          </div>
        </div><!-- /contact -->
    <div class="section" id="news">
    <div class="container">
    <div class="hdWiget text-center">
      <h2>Thông tin du lịch {!! str_replace('Visa đi ', '', $cateDetail->name ) !!}</h2>
    </div>
    <div class="row">
      @if($articlesList)
      @foreach($articlesList as $articles)
      <div class="col-lg-3 col-md-3">
        <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">
          <img width="270" height="190" src="{{ Helper::showImage($articles->image_url) }}">          
        </a>
        <a href="{{ route('news-detail', [$articles->slug, $articles->id]) }}">{!! $articles->title !!}</a>
        <p>Ngày đăng: {!! date('d/m/Y', strtotime($articles->created_at)) !!}</p>
      </div>
      @endforeach
      @endif
    </div>
     <p class="text-center"><a href="#" class="btn btn-default btn-viewall">Xem tất cả</a></p>
    </div>
  </div>
</div>


<input type="hidden" id="rating-route" value="{{ route('rating') }}">
<form id="rating-form">
	{{ csrf_field() }}
	<input type="hidden" id="object_id" name="object_id" value="{{ $detail->id }}">
	<input type="hidden" id="object_type" name="object_type" value="1">
	<input type="hidden" id="score" name="score" value="">
</form>
@stop
@section('js')    
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
	        url : $('#rating-route').val(),
	        type : 'POST',
	        dataType : 'html',
	        data : $('#rating-form').serialize(),
	        success : function(data){
	            $('#rating-summary').html(data);
	            var $input = $('input.rating');
	            if ($input.length) {
	                $input.removeClass('rating-loading').addClass('rating-loading').rating();
	            }
	        }
   		});

        $(document).ready(function($){  
          $('.btn-order').click(function() {
            $(this).html('<i class="fa fa-spin fa-spinner" style="margin-left:5px"></i>');
            var product_id = $(this).data('id');
            addToCart(product_id);
          });
        $('.btn-order-main').click(function() {
            $(this).html('<i class="fa fa-spin fa-spinner"></i>').attr('disabled', 'disabled');
            var product_id = $(this).data('id');
            addToCartMain(product_id);
            
          });
        });
        $(document).on('change', '.change_quantity', function() {
            var quantity = $(this).val();
            var id = $(this).data('id');
            updateQuantity(id, quantity, 'ajax');
        });
        $(document).on('click', '.qty-up', function(){
            var obj = $(this);
            var quantityObj = obj.parents('.item-cart').find('.qty-val');            
            quantityObj.val(parseInt(quantityObj.val()) + 1);
            updateQuantity(obj.data('id'), parseInt(quantityObj.val()), 'normal');
        });
        $(document).on('click', '.qty-down', function(){
            var obj = $(this);
            var quantityObj = obj.parents('.item-cart').find('.qty-val');   
            var currQuantity = parseInt(quantityObj.val());         
            if( currQuantity > 1){
                quantityObj.val(currQuantity - 1);
            }else if(currQuantity == 1){
                obj.parents('.item-cart').remove();
            }
            updateQuantity(obj.data('id'), (currQuantity - 1), 'normal');
        });
        jQuery(document).ready(function () {
                var voffset = jQuery("#myScrollspy").offset();
                var vtop = voffset.top;
                var vbot = jQuery("footer").height() + 160;
                jQuery("#myScrollspy ul").affix({
                    offset: {
                        top: vtop,
                        bottom: vbot
                    }
                });
                // Add smooth scrolling on all links inside the navbar
                $("#myScrollspy a").on('click', function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 300, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }  // End if
                });
            });

	});	
function addToCart(product_id) {
  $.ajax({
    url: $('#route-add-to-cart').val(),
    method: "GET",
    data : {
      id: product_id
    },
    success : function(data){
       window.location.reload();
    }
  });
}
function addToCartMain(product_id) {
  $.ajax({
    url: $('#route-add-to-cart').val(),
    method: "GET",
    data : {
      id: product_id
    },
    success : function(data){
       location.href="{{ route('cart') }}";
    }
  });
}	
function calTotalProduct() {
    var total = 0;
    $('.change_quantity ').each(function() {
        total += parseInt($(this).val());
    });
    $('.order_total_quantity').html(total);
}

function updateQuantity(id, quantity, type) {
    $.ajax({
        url: $('#route-update-product').val(),
        method: "POST",
        data: {
            id: id,
            quantity: quantity
        },
        success: function(data) {
            location.reload();
            /*
            $.ajax({
                url: $('#route-short-cart').val(),
                method: "GET",

                success: function(data) {
                    if (type == 'ajax') {
                        $('#short-cart-content').html(data);
                        calTotalProduct();
                    } else {
                        window.location.reload();
                    }
                }
            });
            */
        }
    });
}
</script>
@stop
