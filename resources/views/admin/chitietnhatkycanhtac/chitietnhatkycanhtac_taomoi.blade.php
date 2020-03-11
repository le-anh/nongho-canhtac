@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>CHI TIẾT NHẬT KÝ CANH TÁC <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.nhatkycanhtac_chitiet.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.nhatkycanhtac_chitiet.luu')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="nhatkycanhtac_id"> Nhật ký canh tác id </label>
            <input type="int" name="nhatkycanhtac_id" id="nhatkycanhtac_id" class="form-control @error('nhatkycanhtac_id') is-invalid @enderror" value="{{old('nhatkycanhtac_id')}}" placeholder="Nhật ký canh tác id" autofocus>
            @error('nhatkycanhtac_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="vattu_id"> Vật tư id </label>
            <input type="int" name="vattu_id" id="vattu_id" class="form-control @error('vattu_id') is-invalid @enderror" value="{{old('vattu_id')}}" placeholder="Vật tư id" autofocus>
            @error('vattu_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="phuongtiensx_id"> Phương tiện sản xuất id </label>
            <input type="int" name="phuongtiensx_id" id="phuongtiensx_id" class="form-control @error('phuongtiensx_id') is-invalid @enderror" value="{{old('phuongtiensx_id')}}" placeholder="Phương tiện sản xuất id" autofocus>
            @error('phuongtiensx_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tenvattuphuongtien"> Tên vật tư phương tiện </label>
            <input type="text" name="tenvattuphuongtien" id="tenvattuphuongtien" class="form-control @error('tenvattuphuongtien') is-invalid @enderror" value="{{old('tenvattuphuongtien')}}" placeholder="Tên vật tư phương tiện" autofocus>
            @error('tenvattuphuongtien') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="dongia"> Đơn giá </label>
            <input type="number" name="dongia" id="dongia" class="form-control @error('dongia') is-invalid @enderror" value="{{old('dongia')}}" placeholder="Đơn giá" autofocus>
            @error('dongia') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="soluong"> Số lượng </label>
            <input type="number" name="soluong" id="soluong" class="form-control @error('soluong') is-invalid @enderror" value="{{old('soluong')}}" placeholder="Số lượng" autofocus>
            @error('soluong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="thongtin"> Thông tin </label>
            <input type="text" name="thongtin" id="thongtin" class="form-control @error('thongtin') is-invalid @enderror" value="{{old('thongtin')}}" placeholder="Thông tin" autofocus>
            @error('thongtin') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary"> <i class="fa fa-close"></i> Hủy </button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Lưu </button>
        </div>
    </form>
  </div>
</div>
@endsection
