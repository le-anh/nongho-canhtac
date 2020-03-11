@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Giống <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.giong.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.giong.luu')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="id"> Mã giống </label>
            <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror" value="{{old('id')}}" placeholder="Mã giống lúa" autofocus>
            @error('magidiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="tengiong"> Tên giống </label>
            <input type="text" name="tengiong" id="tenloaigiong" class="form-control @error('tengiong') is-invalid @enderror" value="{{old('tengiong')}}" placeholder="Tên giống" autofocus>
            @error('tengiong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="dactinh"> Đặc tính </label>
            <input type="text" name="dactinh" id="dactinh" class="form-control @error('dactinh') is-invalid @enderror" value="{{old('tengiong')}}" placeholder="Đặc tính" autofocus>
            @error('dactinh') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mausac"> Màu sắc </label>
            <input type="text" name="mausac" id="mausac" class="form-control @error('mausac') is-invalid @enderror" value="{{old('mausac')}}" placeholder="Màu sắc" autofocus>
            @error('mausac') <div class="alert alert-danger"> {{$message}} </div>  @enderror
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
