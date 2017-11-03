<div class="col-sm-3 col-xs-12 block-col-sidebar">
    <div class="block-sidebar">
        <div class="block-module block-search-sidebar">
            <div class="block-title">
                <h2>
                    <i class="fa fa-search"></i>
                    TÌM KIẾM SẢN PHẨM
                </h2>
            </div>
            <div class="block-content">
                <form action="{!! route('search') !!}" method="GET" id="searchForm" class="frm-search">
                    <div class="form-group">
                    <input type="text" class="form-control txtSearch" id="keyword" name="keyword" value="{{ isset($tu_khoa) ? $tu_khoa : "" }}" placeholder="Từ khóa tìm kiếm...">
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="code" name="code" value="{{ isset($code) ? $code : "" }}" placeholder="Mã sản phẩm">
                  </div>
                    <div class="form-group">
                        <select class="form-control" id="price_range" name="p">
                        <option value="">--Chọn mức giá--</option>
                        @foreach( $priceList as $price)
                        <option value="{!! $price->id !!}" {{ isset($p) && $p == $price->id ? "selected" : "" }}>{!! $price->name !!}</option>
                        @endforeach
                      </select>
                  </div>
                    <div class="form-group">
                        <select class="form-control" id="parent_id" name="pid">
                        <option value="">--Chọn danh mục--</option>
                        @foreach( $cateParentList as $parent )
                        <option value="{{ $parent->id }}" {{ isset($parent_id) && $parent_id == $parent->id ? "selected" : "" }}>{!! $parent->name !!}</option>
                        @endforeach
                      </select>
                  </div>
                    <div class="form-group">
                        <div class="choose-prod-color-list">
                            @foreach( $colorList as $color )
                            <a href="javascript:;"  data-id="{{ $color->id }}" class="choose-color {{ isset($colorArr) && in_array($color->id, $colorArr) ? "active" : "" }}" style="background-color:{{ $color->color_code  }}"></a>
                            <input type="hidden" name="color[]" value="{{ isset($colorArr) && in_array($color->id, $colorArr) ? $color->id : "" }}">
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit"  class="btn btn-main show btnSearch">Tìm kiếm</button>
                  </div>
                </form>
            </div>
        </div>
        <div class="block-module block-links-sidebar">
            <div class="block-title">
                <h2>
                    <i class="fa fa-gift"></i>
                    Khuyến mãi hot
                </h2>
            </div>
            <div class="block-content">
                <ul class="list">
                    @if($kmHot)
                    @foreach( $kmHot as $obj )
                    <li>
                        <a href="{!! route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ] ) !!}" title="{!! $obj->title !!}">
                            <p class="thumb"><img src="{!! Helper::showImage( $obj->image_url ) !!}" alt="{!! $obj->title !!}"></p>
                            <h3>{!! $obj->title !!}</h3>
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>

        <div class="block-module block-statistics-sidebar">
            <div class="block-title">
                <h2>
                    <i class="fa fa-bar-chart"></i>
                    THỐNG KÊ TRUY CẬP
                </h2>
            </div>
            <div class="block-content">
                <ul class="list">                    
                    <li>
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="text">Hôm nay:</span>
                        <span class="number">{{ Helper::view(1, 3, 1) }}</span>
                    </li>
                    
                    <li>
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="text">Tổng truy cập:</span>
                        <span class="number">{{ Helper::view(1, 3) }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- /block-col-left -->