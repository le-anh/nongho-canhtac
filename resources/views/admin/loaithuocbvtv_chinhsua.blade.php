@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Loại thuốc bvtv <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.loaithuocbvtv.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.loaithuocbvtv.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $loaiThuocBvtv->id }}">
        <div class="form-group">
            <label for="maloaigiong"> Mã loại giống </label>
            <input type="text" name="maloaigiong" id="maloaigiong" class="form-control @error('maloaigiong') is-invalid @enderror" value="{{old('maloaigiong', $loaiThuocBvtv->maloaigiong)}}" placeholder="Mã loại giống" autofocus>
            @error('maloaigiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="tenloaithuocbvtv"> Tên loại thuốc bvtv </label>
            <input type="text" name="tenloaithuocbvtv" id="tenloaithuocbvtv" class="form-control @error('tenloaithuocbvtv') is-invalid @enderror" value="{{old('tenloaithuocbvtv', $loaiThuocBvtv->tenloaithuocbvtv)}}" placeholder="Tên loại thuốc bvtv" autofocus>
            @error('tenloaithuocbvtv') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota', $loaiThuocBvtv->mota)}}" placeholder="Mô tả" autofocus>
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
