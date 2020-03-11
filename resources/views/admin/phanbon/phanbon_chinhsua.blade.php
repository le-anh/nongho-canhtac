@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>Phân Bón <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.phanbon.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.phanbon.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $phanBon->id }}">
        <div class="form-group">
            <label for="loaiphanbon_id"> Loại phân bón id </label>
            <input type="text" name="loaiphanbon_id" id="loaiphanbon_id" class="form-control @error('loaiphanbon_id') is-invalid @enderror" value="{{old('loaiphanbon_id', $phanBon->loaiphanbon_id)}}" placeholder="Loại phân bón id" autofocus>
            @error('loaiphanbon_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tenphanbon"> Tên phân bón </label>
            <input type="text" name="tenphanbon" id="tenphanbon" class="form-control @error('tenphanbon') is-invalid @enderror" value="{{old('tenphanbon', $phanBon->tenphanbon)}}" placeholder="Tên phân bón" autofocus>
            @error('tenphanbon') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="dactinh"> Đặc tính </label>
            <input type="text" name="dactinh" id="dactinh" class="form-control @error('dactinh') is-invalid @enderror" value="{{old('dactinh', $phanBon->dactinh)}}" placeholder=" Đặc tính " autofocus>
            @error('dactinh') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="thanhphanhamluong"> Thành phần hàm lượng </label>
            <input type="text" name="thanhphanhamluong" id="thanhphanhamluong" class="form-control @error('thanhphanhamluong') is-invalid @enderror" value="{{old('thanhphanhamluong', $phanBon->thanhphanhamluong)}}" placeholder="Thành phần hàm lượng" autofocus>
            @error('thanhphanhamluong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="nhacungcap"> Nhà cung cấp </label>
            <input type="text" name="nhacungcap" id="nhacungcap" class="form-control @error('nhacungcap') is-invalid @enderror" value="{{old('nhacungcap', $phanBon->nhacungcap)}}" placeholder="Nhà cung cấp" autofocus>
            @error('nhacungcap') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="ghichu"> Ghi chú </label>
            <input type="text" name="ghichu" id="ghichu" class="form-control @error('ghichu') is-invalid @enderror" value="{{old('ghichu', $phanBon->ghichu)}}" placeholder="Ghi chú" autofocus>
            @error('ghichu') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary"> <i class="fa fa-close"></i> Hủy </button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Lưu </button>
        </div>
    </form>
  </div>
</div>
@endsection
