@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Giống<small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.giong.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.giong.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $giong->id }}">
        <div class="form-group">
            <label for="id"> Mã giống </label>
            <input type="text" name="magiong" id="magiong" class="form-control @error('id') is-invalid @enderror" value="{{old('id', $giong->id)}}" placeholder="Mã giống lúa" autofocus>
            @error('id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="tengiong"> Tên giống </label>
            <input type="text" name="tengiong" id="tengiong" class="form-control @error('tengiong') is-invalid @enderror" value="{{old('tengiong', $giong->tengiong)}}" placeholder="Tên giống" autofocus>
            @error('tengiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="dactinh"> Đặc tính </label>
            <input type="text" name="dactinh" id="dactinh" class="form-control @error('dactinh') is-invalid @enderror" value="{{old('dactinh', $giong->dactinh)}}" placeholder="Đặc tính" autofocus>
            @error('dactinh') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mausac"> Màu sắc </label>
            <input type="text" name="mausac" id="mausac" class="form-control @error('mausac') is-invalid @enderror" value="{{old('mausac', $giong->mausac)}}" placeholder="Màu sắc" autofocus>
            @error('mausac') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota', $giong->mota)}}" placeholder="Mô tả" autofocus>
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
