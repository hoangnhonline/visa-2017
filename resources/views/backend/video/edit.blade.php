@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Video     
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('video.index') }}">Video</a></li>
      <li class="active">Cập nhật</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('video.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('video.update') }}">
    <input type="hidden" name="id" value="{{ $detail->id }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật</h3>
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
                  <label>Tên <span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $detail->name ) }}">
                </div>
                <div class="form-group">
                  <label>Youtube ID <span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="youtube_id" id="youtube_id" value="{{ old('youtube_id', $detail->youtube_id) }}">
                </div>                            
            </div>                        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="{{ route('video.index')}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-5">
        <!-- general form elements -->
     
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
