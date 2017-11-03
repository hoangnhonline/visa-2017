@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block-breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="#">Trang chủ</a></li>
      <li class="active">Giỏ hàng</li>
    </ul>
  </div>
</div><!-- /block-breadcrumb -->
<div class="block block-two-col container">
  <div class="block-page-common">
    <div class="block block-title">
      <h2 class="title-main">HOÀN THÀNH ĐƠN HÀNG</h2>
    </div>
  </div><!-- /block-page-common -->
  <div class="row">
    <div class="col-xs-12">
      <div class="block-cart">
        <div class="shopcart-ct col-xs-8 col-xs-offset-2">
          <form action="#" method="POST" class="form-cart">
            <div class="table cart-tbl">
              <div class="table-row thead">
                <div class="table-cell t-c" style="padding-left: 20px;">Đơn hàng của bạn đã đặt thành công</div>
              </div><!-- table-row thead -->
              <div class="tr-wrap">
                <div class="table-row clearfix">
                  <div class="table-cell">
                    <b>Cảm ơn quý khách đã mua hàng !</b> Chúng tôi liên hệ xác nhận đến số điện thoại của quý khách và sẽ giao hàng đến cho quý khách trong thời gian từ 2-3 ngày sau khi xác nhận.<br /><br />
                    <!--
                    Phương thức thanh toán: <b>Chuyển khoản</b><br /><br />

                    Trạng thái thanh toán: <b>Bảo Kim</b><br /><br />-->

                    <b>Chân thành cảm ơn quý khách.</b>
                  </div>
                </div><!-- table-row clearfix -->
              </div><!-- tr-wrap -->
            </div><!-- table cart-tbl -->
            <div class="block-btn text-right">
              <a href="{!! route('home') !!}" title="Trở về trang chủ" class="btn btn-main"><i class="fa fa-long-arrow-left"></i> Trở về trang chủ</a>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /block-col-left -->
  </div>
</div><!-- /block_big-title -->
@stop
@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    setTimeout(function(){
      location.href="{{ route('home') }}";
    }, 4000);
  });
</script>
@stop