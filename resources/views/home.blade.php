@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.loaigiong.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              LOẠI GIỐNG
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.loaiphanbon.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              LOẠI PHÂN BÓN
          </div>
        </div>
      </a>
    </div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.phanbon.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              PHÂN BÓN
          </div>
        </div>
      </a>
    </div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.quytrinh.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              QUY TRÌNH
          </div>
        </div>
      </a>
    </div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.giaidoanquytrinh.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              GIAI ĐOẠN QUY TRÌNH
          </div>
        </div>
      </a>
    </div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.socanhtac.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              SỔ CANH TÁC
          </div>
        </div>
      </a>
    </div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.nhatkycanhtac.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              NHẬT KÝ CANH TÁC
          </div>
        </div>
      </a>
    </div>  
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.nhatkycanhtac_chitiet.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              CHI TIẾT NHẬT KÝ CANH TÁC
          </div>
        </div>
      </a>
    </div> 
        
  </div>
  Tiếp theo!
</div>
@endsection
