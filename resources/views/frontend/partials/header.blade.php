<header id="header" class="header">
	<div class="container">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    	<span class="fa fa-bars fa-2x"></span> 
   	</button>
   	<a class="navbar-brand" href="{{ route('home') }}">
   		<img alt="visana_logo" src="{{ URL::asset('public/assets/imgs/logo.jpg') }}">
   	</a>
   	<a class="navbar-brand navbar-brand-min" href="#">
  <img alt="visana_logo_mobile" src="#">
</a>
    <div class="hdRight text-center hidden-sm hidden-xs">
  <div class="hotline btn-group">
    <div class="btn-group">
      <p style="margin-right:5px;">Hotline:<span> </span></p>
    </div>
    <div class="btn-group">
      <p style="margin-bottom:0px!important;"><strong> 0988.73.23.23</strong></p>
      <p><strong> 0247.108.36.36</strong></p>
    </div>
  </div>
  <div class="btn-group block-btn-header">
    <p><button type="button" class="btn btn-primary login-by-facebook-popup"><i class="fa fa-facebook-square " aria-hidden="true"></i> Đăng nhập</button></p>
    <p><button class="btn btn-warning" data-toggle="modal" data-target="#consult"><i class="fa fa-envelope"></i> <strong>Email tư vấn</strong></button></p>
  </div>
</div>
    <div class="clearfix"></div>
	</div><!-- /container -->
	<nav class="collapse navbar-collapse" role="navigation">
<div class="container">
  <ul class="nav navbar-nav">
    <li class="active"><a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a></li>
    <li class="dropdown">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <i class="fa fa-caret-down"></i></a>
      <div class="dropdown-menu mega-dropdown-menu">
        <div class="container">
          <div class="inner">        
          	@foreach($cateParentList as $cateParent)            
            <div class="col">
              <p class="submenu">{!! $cateParent->name !!}</p>
              @if($cateParent->cates->count())
              <ul>
              	@foreach($cateParent->cates as $cate)
                <?php
                $product = DB::table('product')->where(['is_hot' => 1, 'cate_id' => $cate->id ])->first();                
                ?>
                @if(!empty($product))
                <li><a href="{{ route('cate', [ $cate->slug, $product->slug] ) }}">{!! $cate->name !!}</a></li>                      
                @endif
                @endforeach
              </ul>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </li>
    <li><a href="faq.html">Hỏi đáp Visa</a></li>
    <li><a href="blog.html">Blog du lịch</a></li>
    <li><a href="quotes.html">Báo giá</a></li>
    <li><a href="getcode.html">Mã giảm giá</a></li>
    <li><a href="contact.html">Liên Hệ</a></li>
  </ul>
</div>
</nav><!-- /nav -->
</header><!-- /header -->