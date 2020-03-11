@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Thuốc BVTV <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.thuocbvtv.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.thuocbvtv.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $thuocBvtv->id }}">
        <div class="form-group">
            <label for="id"> ID </label>
            <input type="text" name="mathuoc" id="mathuoc" class="form-control @error('mathuoc') is-invalid @enderror" value="{{old('mathuoc', $thuocBvtv->mathuoc)}}" placeholder="Mã thuốc BVTV" autofocus>
            @error('mathuoc') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="tenthuocbvtv"> Tên thuốc BVTV </label>
            <input type="text" name="tenthuocbvtv" id="tenthuocbvtv" class="form-control @error('tenthuocbvtv') is-invalid @enderror" value="{{old('tenthuocbvtv', $thuocBvtv->tenthuocbvtv)}}" placeholder="Tên loại giống" autofocus>
            @error('tenthuocbvtv') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mucdich"> Mục đích </label>
            <input type="text" name="mucdich" id="mucdich" class="form-control @error('mucdich') is-invalid @enderror" value="{{old('mucdich', $thuocBvtv->mucdich)}}" placeholder="Mục đích" autofocus>
            @error('mucdich') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="nguongoc"> Nguồn gốc </label>
            <input type="text" name="nguongoc" id="nguongoc" class="form-control @error('nguongoc') is-invalid @enderror" value="{{old('nguongoc', $thuocBvtv->nguongoc)}}" placeholder="Nguồn gốc" autofocus>
            @error('nguongoc') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="thanhphanhamluong"> Thành phần hàm lượng </label>
            <input type="text" name="thanhphanhamluong" id="thanhphanhamluong" class="form-control @error('thanhphanhamluong') is-invalid @enderror" value="{{old('thanhphanhamluong', $thuocBvtv->thanhphanhamluong)}}" placeholder="Thành phần hàm lượng" autofocus>
            @error('thanhphanhamluong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="nhacungcap"> Nhà cung cấp </label>
            <input type="text" name="nhacungcap" id="nhacungcap" class="form-control @error('nhacungcap') is-invalid @enderror" value="{{old('nhacungcap', $thuocBvtv->nhacungcap)}}" placeholder="Nhà cung cấp" autofocus>
            @error('nhacungcap') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="mota"> Mô tả </label>
            <input type="text" name="mota" id="mota" class="form-control @error('mota') is-invalid @enderror" value="{{old('mota', $thuocBvtv->mota)}}}" placeholder="Mô tả" autofocus>
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
