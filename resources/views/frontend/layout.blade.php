	<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vn">
<head>
	<title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="vi"/>
    <meta name="description" content="@yield('site_description')"/>
    <meta name="keywords" content="@yield('site_keywords')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>    
    <meta property="article:author" content="https://www.facebook.com/xinvisa.com.vn"/>   
    <link rel="canonical" href="{{ url()->current() }}"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('site_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="xinvisa.com.vn" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="{{ Helper::showImage($socialImage) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('site_description')" />
    <meta name="twitter:title" content="@yield('title')" />     
    <meta name="twitter:image" content="{{ Helper::showImage($socialImage) }}" />
    <link rel="icon" href="{{ URL::asset('public/assets/favicon.ico') }}" type="image/x-icon">
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->

	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/responsive.css') }}">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='css/animations-ie-fix.css' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="wrapper">
		
		@include ('frontend.partials.header')

		<div class="main">
			
			@yield('content')

    </div><!-- /main -->

    <footer id="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-lg-push-3">
            <h2 @if($isEdit) class="edit" @endif" data-text="43">{!! $textList[43] !!}</h2>
            <ul>
              <li><a href="#">Visa đi Hàn Quốc</a></li>
              <li><a href="#">Visa đi Trung Quốc</a></li>
              <li><a href="#">Visa đi Nhật Bản</a></li>
              <li><a href="#">Visa đi Đài Loan</a></li>
              <li><a href="#">Visa đi Ấn Độ</a></li>
              <li><a href="#">Visa đi Úc</a></li>
              <li><a href="#">Visa đi Pháp</a></li>
              <li><a href="#">Visa đi Hong Kong</a></li>
              <li><a href="#">Visa đi Israel</a></li>
              <li><a href="#">Visa đi Nga</a></li>
              <li><a href="#">Visa đi Maroc</a></li>
              <li><a href="#">Visa đi Nam Phi</a></li>
              <li><a href="#">Visa đi Anh</a></li>
              <li><a href="#">Visa đi Canada</a></li>
              <div  style="display:none;">
                <li><a href="#">Visa đi Mỹ</a></li>
                <li><a href="#">Visa đi Anh</a></li>
                <li><a href="#">Visa đi Nga</a></li>
                <li><a href="#">Visa đi Cuba</a></li>
                <li><a href="#">Visa đi Ai Cập</a></li>
                <li><a href="#">Visa đi Thái Lan</a></li>
                <li><a href="#">Visa đi Malaysia</a></li>
                <li><a href="#">Visa đi Singapore</a></li>
                <li><a href="#">Visa đi Bangladesh</a></li>
                <li><a href="#">Visa đi Dubai</a></li>
                <li><a href="#">Visa đi Đức</a></li>
                <li><a href="#">Visa đi Mexico</a></li>
                <li><a href="#">Visa đi Thổ Nhĩ Kỳ</a></li>
              </div>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-lg-push-3">
            <h2 @if($isEdit) class="edit" @endif" data-text="44">{!! $textList[44] !!}</h2>
            <div>
              <p @if($isEdit) class="edit" @endif" data-text="45">{!! $textList[45] !!}</p>
              <p>Hotline:</p>
              <p @if($isEdit) class="edit" @endif" data-text="46">{!! $textList[46] !!}</p>
              <p @if($isEdit) class="edit" @endif" data-text="47">{!! $textList[47] !!}</p>
            </div>
            <hr/>
            <div>
              <p><a href="#">cskh@visana.vn</a></p>
              <p><a href="#">www.facebook.com/visana.vn</a></p>
              <p><a href="#">Blogs</a></p>
              <p><a href="#">Điều khoản sử dụng</a></p>
            </div>
            <hr/>
          </div>
          <div class="col-lg-3 col-md-3 col-lg-pull-9">
            <div class="logoFt">
              <div><img src="https://visana.vn/wp-content/themes/twentyseventeen/assets/img/logo_w.png"></div>
              <p @if($isEdit) class="edit" @endif" data-text="48">{!! $textList[48] !!}</p>
            </div>
            <div>
              <div><img src="https://visana.vn/wp-content/themes/twentyseventeen/assets/img/logo-dis.png"></div>
              <p><small><em>Một dịch vụ của Vietnam Discovery Travel</em></small></p>
            </div>
          </div>
    		</div>
    	</div>
    	<div id="ftCopy" @if($isEdit) class="edit" @endif" data-text="49">{!! $textList[49] !!}</div>
    </footer><!-- /footer -->

	</div><!-- /wrapper -->
<div id="editContentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cập nhật nội dung</h4>
      </div>
      <form method="POST" action="{{ route('save-content') }}">
      {{ csrf_field() }}
      <input type="hidden" name="id" id="txtId" value="">
      <div class="modal-body">
        <textarea rows="5" class="form-control" name="content" id="txtContent"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSaveContent">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
	<!-- ===== JS ===== -->
	<script src="{{ URL::asset('public/assets/js/jquery.min.js') }}"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="{{ URL::asset('public/assets/lib/bootstrap/bootstrap.min.js') }}"></script>
	<!-- carousel -->
	<script src="{{ URL::asset('public/assets/lib/carousel/owl.carousel.min.js') }}"></script>
	<!-- Select -->
  <script src="{{ URL::asset('public/assets/lib/select2/js/select2.min.js') }}"></script>
	<!-- sticky -->
  <script src="{{ URL::asset('public/assets/lib/sticky/jquery.sticky.js') }}"></script>
  <!-- Js Common -->
	<script src="{{ URL::asset('public/assets/js/common.js') }}"></script>
  @yield('js')
  <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

            $('.edit').click(function(){
                $('#txtId').val($(this).data('text'));
                $('#txtContent').val($(this).html());
                $('#editContentModal').modal('show');
            });
            $('#btnSaveContent').click(function(){
                $.ajax({
                    url : '{{ route('save-content') }}',
                    type : "POST",
                    data : {
                        id : $('#txtId').val(),
                        content : $('#txtContent').val()
                    },
                    success:  function(){
                        window.location.reload();
                    }

                });
            });
        });
    </script>
</body>
</html>