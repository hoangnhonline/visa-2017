@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sản phẩm mới    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('product.index') }}">Sản phẩm mới</a></li>
      <li class="active">Thêm mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('product.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('product.store') }}" id="dataForm" class="productForm">
    <input type="hidden" name="is_copy" value="1">
    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thêm mới</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}          
            <div class="box-body">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin chi tiết</a></li>                    
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hình ảnh</a></li>                    
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                   
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="form-group col-md-6 none-padding">
                          <label for="email">Danh mục cha</label>
                          <select class="form-control" name="parent_id" id="parent_id">
                            <option value="">--Chọn--</option>
                            @foreach( $cateParentList as $value )
                            <option value="{{ $value->id }}" {{ $value->id == old('parent_id') || $value->id == $parent_id ? "selected" : "" }}>{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>
                          <div class="form-group col-md-6 none-padding pleft-5">
                          <label for="email">Danh mục con<span class="red-star">*</span></label>
                          <?php 
                          $parent_id = old('parent_id');
                          if($parent_id > 0){
                            $cateArr = DB::table('cate')->where('parent_id', $parent_id)->orderBy('display_order')->get();
                          }
                          ?>
                          <select class="form-control req" name="cate_id" id="cate_id">
                            <option value="">--Chọn--</option>
                            @foreach( $cateArr as $value )
                            <option value="{{ $value->id }}" {{ $value->id == old('cate_id') || $value->id == $cate_id ? "selected" : "" }}>{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>   
                        <div class="form-group" >                  
                          <label>CODE <span class="red-star">*</span></label>
                          <input type="text" class="form-control req" name="code" id="code" value="{{ old('code') }}">
                        </div>                       
                        <div class="form-group" >                  
                          <label>Tên <span class="red-star">*</span></label>
                          <input type="text" class="form-control req" name="name" id="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">                  
                          <label>Slug <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control req" readonly="readonly" name="slug" id="slug" value="{{ old('slug') }}">
                        </div> 
                        <div class="col-md-4 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_hot" value="1" {{ old('is_hot') == 1 ? "checked" : "" }}> NỔI BẬT </label>
                          </div>                          
                        </div>
                        <div class="col-md-4 none-padding">
                          <div class="checkbox">
                              <label><input type="checkbox" name="is_new" value="1" {{ old('is_new') == 1 ? "checked" : "" }}> NEW </label>
                          </div>                          
                        </div>                        
                        <div class="col-md-4 none-padding pleft-5">
                            <div class="checkbox">
                              <label><input type="checkbox" name="is_sale" id="is_sale" value="1" {{ old('is_sale') == 1 ? "checked" : "" }}> SALE </label>
                          </div>
                        </div>
                        <div class="form-group col-md-4 none-padding" >                  
                            <label>Giá<span class="red-star">*</span></label>
                            <input type="text" class="form-control number" name="price" id="price" value="{{ old('price') }}">
                        </div>
                        <div class="form-group col-md-4 none-padding pleft-5" >                  
                            <label>Giá SALE</label>
                            <input type="text" class="form-control number" name="price_sale" id="price_sale" value="{{ old('price_sale') }}">
                        </div>  
                        <div class="form-group col-md-4 pleft-5" >                  
                            <label>% SALE</label>
                            <input type="text" class="form-control number" name="sale_percent" id="sale_percent" value="{{ old('sale_percent') }}">
                        </div>                      
                         <div class="col-md-6 none-padding">
                          <label>Số lượng tồn<span class="red-star">*</span></label>                  
                          <input type="text" class="form-control req number" name="inventory" id="inventory" value="{{ old('inventory') }}">                        
                        </div>
                        <div class="col-md-6">
                            <label>Màu sắc</label>
                            <select name="color_id" id="color_id" class="form-control">
                                <option value="">--chọn--</option>
                                @if( $colorArr->count() > 0)
                                  @foreach( $colorArr as $color )
                                      <option value="{{ $color->id }}">{{ $color->name }}</option>
                                  @endforeach
                                @endif
                            </select>
                        </div>
                        <div style="margin-bottom:10px;clear:both"></div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="4" name="description" id="description">{{ old('description') }}</textarea>
                          </div>
                        <div class="form-group">
                          <label>Chi tiết</label>
                          <textarea class="form-control" rows="4" name="content" id="content">{{ old('content') }}</textarea>
                        </div>                        
                        
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban-->                    
                    
                     <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                         
                          <div class="col-md-12" style="text-align:center">
                         
                            <button class="btn btn-primary btnMultiUpload" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                            <div class="clearfix"></div>
                            <div id="div-image" style="margin-top:10px"></div>
                          </div>
                          <div style="clear:both"></div>
                        </div>

                     </div><!--end hinh anh-->                    
                  </div>

                </div>
                  
            </div>
            <div class="box-footer">              
              <button type="button" class="btn btn-default" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary" id="btnSave">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('product.index')}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-4">      
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thông tin SEO</h3>
          </div>

          <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>Meta title </label>
                <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ old('meta_title') }}">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Meta desciption</label>
                <textarea class="form-control" rows="6" name="meta_description" id="meta_description">{{ old('meta_description') }}</textarea>
              </div>  

              <div class="form-group">
                <label>Meta keywords</label>
                <textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords">{{ old('meta_keywords') }}</textarea>
              </div>  
              <div class="form-group">
                <label>Custom text</label>
                <textarea class="form-control" rows="6" name="custom_text" id="custom_text">{{ old('custom_text') }}</textarea>
              </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<input type="hidden" id="route_upload_tmp_image_multiple" value="{{ route('image.tmp-upload-multiple') }}">
<input type="hidden" id="route_upload_tmp_image" value="{{ route('image.tmp-upload') }}">
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #444345 !important;
  }
  .error{
    border : 1px solid red;
  }
  .select2-container--default .select2-selection--single{
    height: 35px !important;
  }
</style>
@stop
@section('javascript_page')
<script type="text/javascript">

    $(document).ready(function(){
      
      $('#parent_id').change(function(){
        location.href="{{ route('product.create') }}?parent_id=" + $(this).val();
      })
      
      $('#dataForm').submit(function(){        
        $('#btnSave').hide();
        $('#btnLoading').show();
      });    
      $('#price_sale').blur(function(){

        var sale_percent = 0;
        var price = parseInt($('#price').val());
        var price_sale = parseInt($('#price_sale').val());
        if(price_sale > 0){
          $('#is_sale').prop('checked', true);          
          if(price_sale > price){
            price_sale = price;
            $('#price_sale').val(price_sale);
          }
          if( price > 0 ){
            sale_percent = 100 - Math.floor(price_sale*100/price);
            $('#sale_percent').val(sale_percent);
          }
        }
      }); 
       $('#sale_percent').blur(function(){
        var price_sale = 0;
        var price = parseInt($('#price').val());
        var sale_percent = parseInt($('#sale_percent').val());
        sale_percent = sale_percent > 100 ? 100 : sale_percent;
        if( sale_percent > 0){
          $('#is_sale').prop('checked', true);
        }
        if(sale_percent > 100){
          sale_percent = 100;
          $('#sale_percent').val(100);
        }
        if( price > 0 ){
          price_sale = Math.ceil((100-sale_percent)*price/100);
          $('#price_sale').val(price_sale);
        }
      });  
    });
    
</script>
@stop
