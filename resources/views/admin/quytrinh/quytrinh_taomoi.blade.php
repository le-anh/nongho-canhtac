@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Quy Trình <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.quytrinh.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.quytrinh.luu')}}" method="post" enctype="multipart/form-data">
        @csrf()
		<div class="form-group">
            <label for="tenquytrinh"> Tên quy trình </label>
            <input type="text" name="tenquytrinh" id="tenquytrinh" class="form-control @error('tenquytrinh') is-invalid @enderror" value="{{old('tenquytrinh')}}" placeholder="Tên quy trình" autofocus>
            @error('tenquytrinh') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="nongsan_id"> Nông sản ID </label>
            <input type="text" name="nongsan_id" id="nongsan_id" class="form-control @error('nongsan_id') is-invalid @enderror" value="{{old('nongsan_id')}}" placeholder="Nông sản id" autofocus>
            @error('nongsan_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota')}}" placeholder="Mô tả" autofocus>
            @error('mota') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
          <div class="form-group">
            <label for="taptin">Tập tin</label>
            <input type="file" name="taptin" class="form-control" id="taptin">
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
