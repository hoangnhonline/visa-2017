@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Danh mục cha      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('cate-parent.index') }}">Danh mục cha</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default" href="{{ route('cate-parent.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('cate-parent.store') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo mới</h3>
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
              
                 <!-- text input -->
                <div class="form-group">
                  <label>Tên danh mục <span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label>Slug <span class="red-star">*</span></label>
                  <input type="text" class="form-control" readonly="readonly" name="slug" id="slug" value="{{ old('slug') }}">
                </div>              
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="4" name="description" id="description">{{ old('description') }}</textarea>
                </div>            
                <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                  <label class="col-md-3 row">Thumbnail ( 230x230 px)</label>    
                  <div class="col-md-9">
                    <img id="thumbnail_image" src="{{ old('image_url') ? Helper::showImage(old('image_url') ) : URL::asset('public/admin/dist/img/img.png') }}" class="img-thumbnail" width="145" height="85">
                 
                    <button class="btn btn-default btn-sm btnSingleUpload" data-set="image_url" data-image="thumbnail_image" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                  </div>
                   <input type="hidden" name="image_url" id="image_url" value="{{ old('image_url') }}"/>
                </div>
                <div class="form-group">
                  <label>Ẩn/hiện</label>
                  <select class="form-control" name="status" id="status">                  
                    <option value="0" {{ old('status') == 0 ? "selected" : "" }}>Ẩn</option>
                    <option value="1" {{ old('status') == 1 || old('status') == NULL ? "selected" : "" }}>Hiện</option>                  
                  </select>
                </div>
                
            </div>
            <!-- /.box-body -->
            <input type="hidden" name="icon_url" id="icon_url" value="{{ old('icon_url') }}"/>
            <input type="hidden" name="icon_mau" id="icon_mau" value="{{ old('icon_mau') }}"/>
            <input type="hidden" name="image_name_mau" id="image_name_mau" value="{{ old('image_name_mau') }}"/>
            <input type="hidden" name="icon_km" id="icon_km" value="{{ old('icon_km') }}"/>
            <input type="hidden" name="image_name_km" id="image_name_km" value="{{ old('image_name_km') }}"/>
            <input type="hidden" name="icon_name" id="icon_name" value="{{ old('icon_name') }}"/>
            <input type="hidden" name="banner_menu" id="banner_menu" value="{{ old('banner_menu') }}"/>
            <input type="hidden" name="banner_name" id="banner_name" value="{{ old('banner_name') }}"/>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('cate-parent.index')}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-5">
        <!-- general form elements -->
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
                <textarea class="form-control" rows="4" name="meta_description" id="meta_description">{{ old('meta_description') }}</textarea>
              </div>  

              <div class="form-group">
                <label>Meta keywords</label>
                <textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords">{{ old('meta_keywords') }}</textarea>
              </div>  
              <div class="form-group">
                <label>Custom text</label>
                <textarea class="form-control" rows="4" name="custom_text" id="custom_text">{{ old('custom_text') }}</textarea>
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
<input type="hidden" id="route_upload_tmp_image" value="{{ route('image.tmp-upload') }}">
@stop
@section('javascript_page')
<script type="text/javascript">
    $(document).ready(function(){     
      $('#name').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' && $('#slug').val() == ''){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });

    });
    
</script>
@stop
