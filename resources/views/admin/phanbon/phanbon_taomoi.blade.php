@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Phân Bón <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.phanbon.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.phanbon.luu')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="loaiphanbon_id"> Loại phân bón id </label>
            <input type="text" name="loaiphanbon_id" id="loaiphanbon_id" class="form-control @error('loaiphanbon_id') is-invalid @enderror" value="{{old('loaiphanbon_id')}}" placeholder="Loại phân bón id" autofocus>
            @error('loaiphanbon_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tenphanbon"> Tên phân bón </label>
            <input type="text" name="tenphanbon" id="tenphanbon" class="form-control @error('tenphanbon') is-invalid @enderror" value="{{old('tenphanbon')}}" placeholder="Tên phân bón" autofocus>
            @error('tenphanbon') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="dactinh"> Đặc tính </label>
            <input type="text" name="dactinh" id="dactinh" class="form-control @error('dactinh') is-invalid @enderror" value="{{old('dactinh')}}" placeholder="Đặc tính" autofocus>
            @error('dactinh') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="thanhphanhamluong"> Thành phần hàm lượng </label>
            <input type="text" name="thanhphanhamluong" id="thanhphanhamluong" class="form-control @error('thanhphanhamluong') is-invalid @enderror" value="{{old('thanhphanhamluong')}}" placeholder="Thành phần hàm lượng" autofocus>
            @error('thanhphanhamluong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="nhacungcap"> Nhà cung cấp </label>
            <input type="text" name="nhacungcap" id="nhacungcap" class="form-control @error('nhacungcap') is-invalid @enderror" value="{{old('nhacungcap')}}" placeholder="Nhà cung cấp" autofocus>
            @error('nhacungcap') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="ghichu"> Ghi chú </label>
            <input type="text" name="ghichu" id="ghichu" class="form-control @error('ghichu') is-invalid @enderror" value="{{old('ghichu')}}" placeholder="Ghi chú" autofocus>
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
