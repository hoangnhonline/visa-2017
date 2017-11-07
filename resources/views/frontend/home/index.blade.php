@extends('frontend.layout')

@include('frontend.partials.meta')

@section('content')
<div id="slidebanner">
        <div id="searchBox">            
  <div id="searchBox">
    <div class="inner">
      <h3 class="text-center">Visa trong tầm tay</h3>
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
          <div class="col-lg-3 col-md-3"> <span>10+</span> Năm kinh nghiệm trong xin Visa</div>
          <div class="col-lg-3 col-md-3"> <span>100%</span> Khách hàng hài lòng</div>
          <div class="col-lg-3 col-md-3"> <span>24/7</span> Tư vấn miễn phí</div>
          <div class="col-lg-3 col-md-3"> <span>98.6%</span> Tỷ lệ đậu Visa cao</div>
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
    <h2>Vì sao chọn VISANA?</h2>
  </div>
  <p style="text-align: justify;">Sau 10 năm hoạt động trong lĩnh vực visa cho người nước ngoài đến Việt Nam cũng như cung cấp các dịch vụ tour du lịch, VISANA được thành lập để giải quyết nhu cầu xin visa đi nước ngoài cho người Việt Nam ngày càng gia tăng. VISANA có đội ngũ nhân viên hỗ trợ giàu <strong>kinh nghiệm xử lý các tình huống oái oăm và cấp bách</strong>, đội ngũ chuyên viên làm việc trực tiếp với Đại sứ quán lấy số hẹn, hẹn khách hàng và cùng khách hàng nộp hồ sơ xin visa cũng như lấy kết quả visa. Mọi thủ tục và quy trình dịch vụ của VISANA đều hướng đến <strong>sự thảnh thơi</strong> và <strong>tiết kiệm thời gian</strong> cho quý khách hàng.</p>
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <h3>Thủ tục đơn giản</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w1.png') }}" alt="thu tuc visana"></span></div>
      <p>Điền thông tin trực tuyến chỉ trong 1 phút, giúp tiết kiệm tối đa thời gian của khách hàng.</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3>Hỗ trợ 24/7</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w2.png') }}" alt="ho tro visana"></span></div>
      <p>Đội ngũ nhân viên am hiểu và giàu kinh nghiệm xử lý những tình huống đặc biệt. Tư vấn hoàn toàn miễn phí.</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3>Xử lý nhanh chóng</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w3.png') }}" alt="xu ly visana"></span></div>
      <p>Phản hồi nhanh, xử lý yêu cầu trong ngày, có lựa chọn khẩn cấp trong trường hợp khách hàng cần.</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <h3>Dịch vụ tận tâm</h3>
      <hr/>
      <div><span class="iconWhy"><img src="{{ URL::asset('public/assets/imgs/w4.png') }}" alt="dich vu visana"></span></div>
      <p>Hỗ trợ lên lịch trình du lịch, booking khách sạn, booking giữ chỗ vé máy bay và bảo hiểm.</p>
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
    <h2>Quy trình</h2>
    <p>Chỉ mất từ 3h - 2 ngày làm việc</p>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">01</span> <img src="{{ URL::asset('public/assets/imgs/s1.jpg') }}" alt="visana step 1">
      <h3>Điền thông tin (1 phút)</h3>
      <p>Form điền thông tin đơn giản, nhanh chóng. Thông tin được bảo mật an toàn.</p>
    </div>
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">02</span> <img src="{{ URL::asset('public/assets/imgs/s2.jpg') }}" alt="visana step 2">
      <h3>Chờ nhân viên liên hệ</h3>
      <p>Nhân viên sẽ liên hệ lại với bạn trong vòng 4h. Bạn cũng có thể liên hệ qua số Hotline của chúng tôi.</p>
    </div>
    <div class="col-lg-4 col-md-4 item">
      <span class="circle">03</span> <img src="{{ URL::asset('public/assets/imgs/s3.jpg') }}" alt="visana step 3">
      <h3>Hoàn thiện hồ sơ (2-3 ngày)</h3>
      <p>Một nhân viên giàu kinh nghiệm sẽ đồng hành hỗ trợ bạn suốt quá trình này để đảm bảo tỉ lệ cao nhất.</p>
    </div>
  </div>
  <div class="row hidden-sm hidden-xs">
    <div class="col-lg-4 col-md-4">
      <ul>
        <li>Hồ sơ tối giản</li>
        <li>Bảo mật thông tin cao nhất</li>
        <li>Giải pháp thông minh</li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-4">
      <ul>
        <li>Hỗ trợ tối đa</li>
        <li>Tư vấn miễn phí</li>
        <li>Chi phí minh bạch</li>
      </ul>
    </div>
    <div class="col-lg-4 col-md-4">
      <ul>
        <li>Chuẩn bị hồ sơ chuyên nghiệp</li>
        <li>Xin Visa nhanh</li>
        <li>Tỷ lệ đạt Visa đến 98.6%</li>
      </ul>
    </div>
  </div>
</div>
</div><!-- stepVisa -->    

<div id="map">
<div class="contactForm">
  <div class="container">
    <div class="inner">
      <h3 class="text-center">Bạn cần tư vấn?</h3>
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
    <h2>Blog du lịch</h2>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/Cac-nuoc-de-xin-visa-feature-image-270x190.png') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="Các nước dễ xin visa" />
      </a>
      <a href="#" rel="bookmark">Xếp hạng các nước dễ xin visa nhất cho người Việt Nam</a>
      <p>Ngày đăng: 20/02/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/maxresdefault-850x400-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="maxresdefault-850x400" />
      </a>
      <a href="#" rel="bookmark">Thủ tục xin visa du lịch Pháp</a>
      <p>Ngày đăng: 09/03/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="$">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/stock-photo-consulate-general-of-the-united-states-of-america-1304768-nowatermark-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="stock-photo-consulate-general-of-the-united-states-of-america-1304768-nowatermark" />
      </a>
      <a href="#" rel="bookmark">Danh sách các Lãnh sự quán tại Hồ Chí Minh</a>
      <p>Ngày đăng: 10/03/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/taiwan-850-thumb-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="Taiwan-thumb" />
      </a>
      <a href="#" rel="bookmark">Tất tần tật kinh nghiệm xin visa Đài Loan để đi du lịch</a>
      <p>Ngày đăng: 10/03/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/hong-kong-island-thumb-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="kinh-nghiệm-du-lịch-hongkong-hong-kong-island-thumb" />
      </a>
      <a href="#" rel="bookmark">Cẩm nang kinh nghiệm du lịch Hongkong tự túc</a>
      <p>Ngày đăng: 03/04/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/xin-visa-schengen-anh-850-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="xin-visa-schengen-anh-850" />
      </a>
      <a href="#" rel="bookmark">Giải đáp các câu hỏi thường gặp khi xin visa Schengen</a>
      <p>Ngày đăng: 21/08/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/visa-My-2017-thumb850-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="" />
      </a>
      <a href="#" rel="bookmark">Kinh nghiệm xin visa Mỹ 2017 &#8211; Việc xin visa có gì thay đổi?</a>
      <p>Ngày đăng: 09/09/2017</p>
    </div>
    <div class="col-lg-3 col-md-3">
      <a href="#">
        <img width="270" height="190" src="{{ URL::asset('public/assets/imgs/visa-Dan-Mach-tham-than-thumb-850-400-270x190.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image lazyload" alt="visa-Dan-Mach-tham-than-thumb-850-400" />
      </a>
      <a href="#" rel="bookmark">Những điều không thể không biết khi xin visa Đan Mạch để thăm người thân</a>
      <p>Ngày đăng: 09/09/2017</p>
    </div>
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