@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Giai Đoạn Quy Trình <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.giaidoanquytrinh.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.giaidanquytrinh.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $giaiDoanQuyTrinh->id }}">
		<div class="form-group">
            <label for="quytrinh_id"> Quy trình id </label>
            <input type="text" name="quytrinh_id" id="quytrinh_id" class="form-control @error('quytrinh_id') is-invalid @enderror" value="{{old('quytrinh_id', $giaiDoanQuyTrinh->quytrinh_id)}}" placeholder="Quy trình id" autofocus>
            @error('quytrinh_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tengiaidoan"> Tên giai đoạn </label>
            <input type="text" name="tengiaidoan" id="tengiaidoan" class="form-control @error('tengiaidoan') is-invalid @enderror" value="{{old('tengiaidoan', $giaiDoanQuyTrinh->tengiaidoan)}}" placeholder="Tên loại giống" autofocus>
            @error('tengiaidoan') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="huongdan"> Hướng dẫn </label>
            <input type="text" name="huongdan" id="huongdan" class="form-control @error('huongdan') is-invalid @enderror" value="{{old('huongdan', $giaiDoanQuyTrinh->huongdan)}}" placeholder="Mô tả" autofocus>
            @error('huongdan') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="taptin"> Phương pháp </label>
            <input type="text" name="taptin" id="taptin" class="form-control @error('taptin') is-invalid @enderror" value="{{old('taptin', $giaiDoanQuyTrinh->taptin)}}" placeholder="Phương pháp" autofocus>
            @error('taptin') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary"> <i class="fa fa-close"></i> Hủy </button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Lưu </button>
        </div>
    </form>
  </div>
</div>
@endsection
