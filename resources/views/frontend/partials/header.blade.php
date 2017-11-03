<header class="header">
	<div class="block-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12 block-logo">
					<a href="{!! route('home') !!}" title="Logo">
						<img src="{{ Helper::showImage( $settingArr['logo']) }}" alt="Logo">
					</a>
				</div><!-- /block-logo -->
				<div class="col-sm-8 col-xs-12 block-info">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="block-search">
								<form class=""  action="{{ route('search') }}" method="GET">
									<button type="submit" class="btn icon btnSearch"><i class="fa fa-search"></i></button>
									<div class="search-inner">
										<input type="text" class="txtSearch" value="{!! isset($tu_khoa) ? $tu_khoa : "" !!}" name="keyword" placeholder="Từ khóa bạn cần tìm...">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- /bblock-info -->				
				<form class="hdr-search"  action="{{ route('search') }}" method="GET">
					<div class="input-serach">
						<input type="text" class="txtSearch" value="{!! isset($tu_khoa) ? $tu_khoa : "" !!}" name="keyword" placeholder="Từ khóa bạn cần tìm...">
					</div>
					<div class="select-choice">
						<div class="form-category">
							<select class="cid choice" name="pid">
								<option value="">Danh mục</option>
								@foreach($cateParentList as $value)
							   	<option value="{{ $value->id }}" {{ isset($parent_id) && $parent_id == $value->id ? "selected" : "" }}>{!! $value->name !!}</option>>
							   	@endforeach
							</select>
						</div>
						<button type="submit" class="btn-search">Tìm kiếm</button>
					</div>
				</form>

				<div class="hdr-cart">
					<a href="{{ route('cart') }}" title="Giỏ hàng">
						<i class="fa fa-shopping-cart"></i>
						<span>Giỏ hàng</span><br>
						<span><b>{{ Session::get('products') ? array_sum(Session::get('products')) : 0 }}</b> sản phẩm</span>
					</a>
				</div>

				<ul class="hdr-social">
					<li><a href="{{ $settingArr['facebook_fanpage'] }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{ $settingArr['google_fanpage'] }}" target="_blank"><i class="fa fa-google"></i></a></li>
					<li><a href="{{ $settingArr['youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="skype:{{ $settingArr['skype'] }}?chat"><i class="fa fa-skype"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="block-fb">
			<div class="icon">
				<i class="fa fa-facebook"></i>
			</div>
			<div class="fb-inner">
				<div class="fb-page" data-href="{{ $settingArr['facebook_fanpage'] }}" data-tabs="timeline" data-width="300px" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{ $settingArr['facebook_fanpage'] }}" class="fb-xfbml-parse-ignore"><a href="{{ $settingArr['facebook_fanpage'] }}">Facebook</a></blockquote></div>
			</div>
		</div>
	</div><!-- /block-header-bottom -->
	<div class="menu">
		<div class="nav-toogle">
			<i class="fa"></i>
		</div>
		<div class="block-cart-mb">
			<a href="{{ route('cart') }}" title="Giỏ hàng">
				<i class="fa fa-shopping-cart"></i>
				<span>{{ Session::get('products') ? array_sum(Session::get('products')) : 0 }}</span>
			</a>
		</div>
		<nav class="menu-top">
			<div class="container">
				<ul class="nav-menu">
					<li class="level0 @if( $routeName == "home") active @endif"><a href="{!! route('home') !!}" title="Trang Chủ">Trang Chủ</a></li>
					<li class="level0 @if( $routeName == "pages" && $slug == "gioi-thieu" ) active @endif"><a href="{!! route('pages', 'gioi-thieu' ) !!}" title="Giới Thiệu">Giới Thiệu</a></li>
					<li class="level0 parent @if( in_array($routeName, ["cate-parent", "cate", "product"])) active @endif">
						<a href="#" title="Sản Phẩm">SẢN PHẨM</a>
						<ul class="level0 submenu">
							@foreach( $cateParentList as $parent )							
							<li class="level1 @if( !empty( $cateArrByLoai[$parent->id] ) ) parent @endif ">
								<a href="{!! route( 'cate-parent', $parent->slug ) !!}" title="{!! $parent->name !!}">{!! $parent->name !!}</a>
								@if( !empty( $cateArrByLoai[$parent->id] ) )									
									<ul class="level1 submenu">
										@foreach( $cateArrByLoai[$parent->id] as $cate )
										<li class="level2"><a href="{{ route('cate', [ $parent->slug, $cate->slug ]) }}" title="{!! $cate->name !!}">{!! $cate->name !!}</a></li>
										@endforeach
									</ul>									
								@endif
							</li>
							@endforeach
						</ul>
					</li>
					<li class="level0 @if( ( $routeName == "news-list" || $routeName == "news-detail" ) && isset($cateDetail) && $cateDetail->slug == "khuyen-mai" ) active @endif""><a href="{!! route('news-list', 'khuyen-mai') !!}" title="KHUYẾN MÃI">KHUYẾN MÃI</a></li>
					<li class="level0 @if( ( $routeName == "news-list" || $routeName == "news-detail")  && isset($cateDetail) && $cateDetail->slug == "tuyen-dung"  ) active @endif""><a href="{!! route('news-list', 'tuyen-dung') !!}" title="TUYỂN DỤNG">TUYỂN DỤNG</a></li>
					<li class="level0 @if( $routeName == "contact") active @endif"><a href="{!! route('contact') !!}" title="Liên Hệ">Liên Hệ</a></li>
					<li class="nav-info">
						<i class="fa fa-phone"></i> <a href="tel:{!! $textList[13] !!}" data-text="13" @if($isEdit) class="edit" @endif>{!! $textList[13] !!}</a> - <a href="tel:{!! $textList[14] !!}" @if($isEdit) class="edit" @endif>{!! $textList[14] !!}</a>
					</li>
				</ul>
			</div>
		</nav><!-- /menu-top -->
	</div><!-- /menu -->
</header><!-- /header -->