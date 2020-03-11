@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>CHI TIẾT NHẬT KÝ CANH TÁC <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.nhatkycanhtac_chitiet.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.nhatkycanhtac_chitiet.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $chiTietNhatKyCanhTac->id }}">
        <div class="form-group">
            <label for="nhatkycanhtac_id"> Nhật ký canh tác id </label>
            <input type="text" name="nhatkycanhtac_id" id="nhatkycanhtac_id" class="form-control @error('nhatkycanhtac_id') is-invalid @enderror" value="{{old('nhatkycanhtac_id', $chiTietNhatKyCanhTac->nhatkycanhtac_id)}}" placeholder="Tên loại giống" autofocus>
            @error('nhatkycanhtac_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="vattu_id"> Vật tư id </label>
            <input type="text" name="vattu_id" id="vattu_id" class="form-control @error('vattu_id') is-invalid @enderror" value="{{old('vattu_id', $chiTietNhatKyCanhTac->vattu_id)}}" placeholder="Tên loại giống" autofocus>
            @error('vattu_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="phuongtiensx_id"> Phương tiện sản xuất id </label>
            <input type="integer" name="phuongtiensx_id" id="phuongtiensx_id" class="form-control @error('phuongtiensx_id') is-invalid @enderror" value="{{old('phuongtiensx_id', $chiTietNhatKyCanhTac->phuongtiensx_id)}}" placeholder="Tên loại giống" autofocus>
            @error('phuongtiensx_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tenvattuphuongtien"> Tên vật tư phương tiện </label>
            <input type="text" name="tenvattuphuongtien" id="tenvattuphuongtien" class="form-control @error('tenvattuphuongtien') is-invalid @enderror" value="{{old('tenvattuphuongtien', $chiTietNhatKyCanhTac->tenvattuphuongtien)}}" placeholder="Tên loại giống" autofocus>
            @error('tenvattuphuongtien') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="dongia"> Đơn giá </label>
            <input type="number" name="dongia" id="dongia" class="form-control @error('dongia') is-invalid @enderror" value="{{old('dongia', $chiTietNhatKyCanhTac->dongia)}}" placeholder="Tên loại giống" autofocus>
            @error('dongia') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="soluong"> Số lượng </label>
            <input type="number" name="soluong" id="soluong" class="form-control @error('soluong') is-invalid @enderror" value="{{old('soluong', $chiTietNhatKyCanhTac->soluong)}}" placeholder="Ghi chú" autofocus>
            @error('soluong') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="thongtin"> Thông tin </label>
            <input type="text" name="thongtin" id="thongtin" class="form-control @error('thongtin') is-invalid @enderror" value="{{old('thongtin', $chiTietNhatKyCanhTac->thongtin)}}" placeholder="Ghi chú" autofocus>
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
