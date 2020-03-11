@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>NHẬT KÝ CANH TÁC<small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.nhatkycanhtac.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.nhatkycanhtac.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $nhatKyCanhTac->id }}">
        <div class="form-group">
            <label for="socanhtac_id"> Sổ canh tác id </label>
            <input type="text" name="socanhtac_id" id="socanhtac_id" class="form-control @error('socanhtac_id') is-invalid @enderror" value="{{old('socanhtac_id', $nhatKyCanhTac->socanhtac_id)}}" placeholder="Sổ canh tác id " autofocus>
            @error('socanhtac_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="giaidoanquytrinh_id"> Giai đoạn quy trình id </label>
            <input type="text" name="giaidoanquytrinh_id" id="giaidoanquytrinh_id" class="form-control @error('giaidoanquytrinh_id') is-invalid @enderror" value="{{old('giaidoanquytrinh_id', $nhatKyCanhTac->giaidoanquytrinh_id)}}" placeholder="Giai đoạn quy trình id " autofocus>
            @error('giaidoanquytrinh_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="ngaythuchien"> Ngày thực hiện </label>
            <input type="date" name="ngaythuchien" id="ngaythuchien" class="form-control @error('ngaythuchien') is-invalid @enderror" value="{{old('ngaythuchien', $nhatKyCanhTac->ngaythuchien)}}" placeholder="Ngày thực hiện" autofocus>
            @error('ngaythuchien') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="nguoithuchien"> Người thực hiện </label>
            <input type="text" name="nguoithuchien" id="nguoithuchien" class="form-control @error('nguoithuchien') is-invalid @enderror" value="{{old('nguoithuchien', $nhatKyCanhTac->nguoithuchien)}}" placeholder="Người thực hiện" autofocus>
            @error('nguoithuchien') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="tongchiphi"> Tổng chi phí </label>
            <input type="text" name="tongchiphi" id="tongchiphi" class="form-control @error('tongchiphi') is-invalid @enderror" value="{{old('tongchiphi', $nhatKyCanhTac->tongchiphi)}}" placeholder="Tổng chi phí " autofocus>
            @error('tongchiphi') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="thongtin"> Thông tin </label>
            <input type="text" name="thongtin" id="thongtin" class="form-control @error('thongtin') is-invalid @enderror" value="{{old('thongtin', $nhatKyCanhTac->thongtin)}}" placeholder="Thông tin" autofocus>
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
