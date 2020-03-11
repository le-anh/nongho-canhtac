@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Loại Phân Bón <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.loaiphanbon.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.loaiphanbon.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $loaiPhanBon->id }}">
        <div class="form-group">
            <label for="tenloaiphanbon"> Tên loại phân bón </label>
            <input type="text" name="tenloaiphanbon" id="tenloaiphanbon" class="form-control @error('tenloaiphanbon') is-invalid @enderror" value="{{old('tenloaiphanbon', $loaiPhanBon->tenloaiphanbon)}}" placeholder="Tên loại phân bón" autofocus>
            @error('tenloaiphanbon') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota', $loaiPhanBon->mota)}}" placeholder="Mô tả" autofocus>
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
