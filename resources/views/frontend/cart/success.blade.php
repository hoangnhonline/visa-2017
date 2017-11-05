@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<article class="mar-top40">
  <div class="container">
      <div class="breadcrumbs">
          <ul>
              <li><a href="/">Trang chủ</a></li>
              <li>Thông tin đặt hàng</li>
          </ul>
      </div>
  </div>
  <section id="checkout-page">
      <div class="container">
          <div class="title-section">
              THÔNG TIN ĐẶT HÀNG
          </div>
      </div>
      <div class="container">
          <div class="box-checkout marg40">
              <div class="header-box">
                  <div class="row bs-wizard" style="border-bottom:0;">
                      <div class="col-xs-4 bs-wizard-step complete">
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot">1</a>
                          <div class="bs-wizard-info text-center">Thời gian & địa chỉ nhận hàng</div>
                      </div>

                      <div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot">2</a>
                          <div class="bs-wizard-info text-center">Thông tin đơn hàng</div>
                      </div>

                      <div class="col-xs-4 bs-wizard-step active"><!-- complete -->
                          <div class="progress"><div class="progress-bar"></div></div>
                          <a href="#" class="bs-wizard-dot">3</a>
                          <div class="bs-wizard-info text-center">Hoàn tất</div>
                      </div>
                  </div>
              </div>
              <div class="body-box">
                  <p class="marg30"><b>Cảm ơn quý khách đã mua hàng</b></p>
                  <p><b>Đơn hàng của bạn đã được đặt thành công! </b>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
              </div>
          </div>
      </div>
  </section>
</article>
@stop
@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    setTimeout(function(){
      location.href="{{ route('cate-parent', 'coffee') }}";
    }, 3000);
  });
</script>
@stop