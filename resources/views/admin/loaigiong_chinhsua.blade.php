@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Loại giống <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.loaigiong.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.loaigiong.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $loaiGiong->id }}">
        <div class="form-group">
            <label for="tenloaigiong"> Tên loại giống </label>
            <input type="text" name="tenloaigiong" id="tenloaigiong" class="form-control @error('tenloaigiong') is-invalid @enderror" value="{{old('tenloaigiong', $loaiGiong->tenloaigiong)}}" placeholder="Tên loại giống" autofocus>
            @error('tenloaigiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota', $loaiGiong->mota)}}" placeholder="Mô tả" autofocus>
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
