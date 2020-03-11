@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="title">
    <h5 class="pull-left"><strong>SỔ CANH TÁC <small> (chỉnh sửa)</small></strong></h5>
    <a href="{{route('admin.socanhtac.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.socanhtac.capnhat')}}" method="post">
        @csrf()
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $soCanhTac->id }}">
        <div class="form-group">
            <label for="kehoachsanxuat_thuadat_id"> kehoachsanxuat_thuadat_id </label>
            <input type="text" name="kehoachsanxuat_thuadat_id" id="kehoachsanxuat_thuadat_id" class="form-control @error('kehoachsanxuat_thuadat_id') is-invalid @enderror" value="{{old('kehoachsanxuat_thuadat_id', $soCanhTac->kehoachsanxuat_thuadat_id)}}" placeholder="kehoachsanxuat_thuadat_id" autofocus>
            @error('kehoachsanxuat_thuadat_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
		<div class="form-group">
            <label for="ngaytao"> Ngày tạo </label>
            <input type="date" name="ngaytao" id="ngaytao" class="form-control @error('ngaytao') is-invalid @enderror" value="{{old('ngaytao', $soCanhTac->ngaytao)}}" placeholder="Ngày tạo" autofocus>
            @error('ngaytao') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-secondary"> <i class="fa fa-close"></i> Hủy </button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Lưu </button>
        </div>
    </form>
  </div>
</div>
@endsection
