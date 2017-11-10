	<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vn">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<title>Home</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow" />
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