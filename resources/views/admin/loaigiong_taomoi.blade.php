@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Loại giống <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.loaigiong.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.loaigiong.luu')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="tenloaigiong"> Tên loại giống </label>
            <input type="text" name="tenloaigiong" id="tenloaigiong" class="form-control @error('tenloaigiong') is-invalid @enderror" value="{{old('tenloaigiong')}}" placeholder="Tên loại giống" autofocus>
            @error('tenloaigiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota')}}" placeholder="Mô tả" autofocus>
            @error('mota') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary"> <i class="fa fa-close"></i> Hủy </button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Lưu </button>
        </div>
    </form>
  </div>
</div>
@endsection
