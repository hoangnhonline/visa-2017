@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<?php $total = 0; ?>
<div class="block block-breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a class="home" href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
      <li><a href="{{ route('cart') }}">Giỏ hàng</a></li>
      <li class="active">Thông tin thanh toán</li>
    </ul>
  </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
  <div class="block-page-common">
    <div class="block block-title">
      <h1 class="title-main">THÔNG TIN THANH TOÁN</h1>
    </div>
  </div><!-- /block-page-common -->
  <div class="row">
    <div class="col-sm-8 col-xs-12 block-col-left">
      <div class="block-billing">
        <div class="block-title">
          THÔNG TIN ĐẶT HÀNG
        </div>
        <div class="block-content">          
          <form id="addressForm" action="{{ route('store-address') }}" method="POST" class="form-billing">
                {{ csrf_field() }}
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control req" id="fullname" name="fullname" placeholder="Họ và tên" value="{!! isset($addressInfo['fullname']) ? $addressInfo['fullname'] : "" !!}">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control req" id="email" name="email" placeholder="Email" value="{!! isset($addressInfo['email']) ? $addressInfo['email'] : "" !!}">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-phone"></i></span>
              <input type="text" class="form-control req" id="phone" name="phone" placeholder="Số điện thoại" value="{!! isset($addressInfo['phone']) ? $addressInfo['phone'] : "" !!}">
            </div>
            <div class="form-group">
              <span class="input-addon"><i class="fa fa-home"></i></span>
              <input type="text" class="form-control req" id="address" name="address" placeholder="Địa chỉ" value="{!! isset($addressInfo['address']) ? $addressInfo['address'] : "" !!}">
            </div>
            <div class="form-group">              
              <label class="choose-another"><input type="checkbox" value="1" id="choose-other-address" @if( isset($addressInfo['choose_other_address']) && $addressInfo['choose_other_address'] == 1 ) checked  @endif name="choose_other_address" class="radio-cus"> Giao đến địa chỉ khác</label>
            </div>
            <div id="div-other-address" @if( !isset($addressInfo['choose_other_address'])) style="display: none;" @endif>
              <div class="form-group">
                <b>Thông tin người nhận</b>
              </div>
              <div class="form-group">
                <span class="input-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="other_fullname" name="other_fullname" placeholder="Họ và tên" value="{!! isset($addressInfo['other_fullname']) ? $addressInfo['other_fullname'] : "" !!}">
              </div>
              <div class="form-group">
                <span class="input-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email" id="other_email" name="other_email" value="{!! isset($addressInfo['other_email']) ? $addressInfo['other_email'] : "" !!}">
              </div>
              <div class="form-group">
                <span class="input-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" placeholder="Số điện thoại" id="other_phone" name="other_phone" value="{!! isset($addressInfo['other_phone']) ? $addressInfo['other_phone'] : "" !!}">
              </div>
              <div class="form-group">
                <span class="input-addon"><i class="fa fa-home"></i></span>
                <input type="text" class="form-control" placeholder="Địa chỉ" id="other_address" name="other_address" value="{!! isset($addressInfo['other_address']) ? $addressInfo['other_address'] : "" !!}">
              </div>
            </div>
            <div class="text-right" style="margin-top: 10px">
              <button type="submit" id="btnSave" class="btn btn-main">
                Tiếp tục <i class="fa fa-long-arrow-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div><!-- /block-billing -->
    </div><!-- /block-col-left -->
    <div class="col-sm-4 col-xs-12 block-col-right">
      <div class="block-billing-product">
        <div class="block-title">
          THÔNG TIN SẢN PHẨM
        </div>
        <div class="block-content">
          <table class="table-billing-product">
            <thead>
              <tr>
                <th class="table-width"><strong>Sản phẩm</strong></th>
                <th class="text-right"><strong>Tổng cộng</strong></th>
              </tr>
            </thead>
            <tbody>
              @if(!empty(Session::get('products')))
              
              @if( $arrProductInfo->count() > 0)
                  <?php $i = 0; ?>
                @foreach($arrProductInfo as $product)
                <?php 
                $i++;
                $price = $product->is_sale ? $product->price_sale : $product->price; 

                $total += $total_per_product = ($getlistProduct[$product->id]*$price);
                
                ?>
              <tr>
                <td>
                  <p class="tb-commom"><strong>{!! $product->name !!}</strong></p>
                  <p class="tb-commom">Số lượng: {{ $getlistProduct[$product->id] }} x {!! number_format($product->price_sell) !!} </p>               
                </td>
                <td style="text-align:right">
                  <strong class="text-right">{!! number_format($total_per_product) !!}đ</strong>
                </td>
              </tr>
              @endforeach

              @endif  

              @endif
              <tr>
                <td>
                  <strong>Tạm tính</strong>
                </td>
                <td>
                  <p class="text-right">{{ number_format($total) }}đ</p>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Tổng cộng</strong>
                </td>
                <td>
                  <p class="cl-red text-right">{{ number_format($total) }}đ</p>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="text-center">
                  (Chưa bao gồm phí vận chuyển nếu có)
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- /block-col-right -->
  </div>
</div><!-- /block_big-title -->
<style type="text/css">
  .error{
    border : 1px solid red !important;
  }
</style>
@stop
@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#choose-other-address').click(function(){
      if( $(this).prop('checked') == true ){
        $('#div-other-address').show();
        $('#div-other-address input').addClass('req');
        $('#div-other-address #other_email').removeClass('req');
      }else{
        $('#div-other-address').hide();
        $('#div-other-address input').val('').removeClass('req');
      }
    });
    $('#btnSave').click(function(){      
        var errReq = 0;
        var parent = $(this).parents('form');
        parent.find('.req').each(function(){
          var obj = $(this);
          if(obj.val() == ''){
            errReq++;
            obj.addClass('error');
            obj.prev().addClass('error');
          }else{
            obj.removeClass('error');
            obj.prev().removeClass('error');
          }
        });
        if(errReq > 0){          
         $('html, body').animate({
              scrollTop: parent.offset().top
          }, 500);
          return false;
        }       

    });
    $('.req').blur(function(){    
        var obj = $(this);
        if(obj.val() != ''){
          obj.removeClass('error');
          obj.prev().removeClass('error');
        }else{
          obj.addClass('error');
          obj.prev().addClass('error');
        }
      });
  });
</script>
@endsection








