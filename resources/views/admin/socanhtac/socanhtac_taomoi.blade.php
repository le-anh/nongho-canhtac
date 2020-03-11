@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>SỔ CANH TÁC <small> (tạo mới) </small></strong></h5>
    <a href="{{route('admin.socanhtac.trangchu')}}" class="btn btn-info pull-right"> <i class="fa fa-arrow-circle-left"></i></a>
  </div>
  <div>
    <form action="{{route('admin.socanhtac.luu')}}" method="post">
        @csrf()
        <div class="form-group">
            <label for="kehoachsanxuat_thuadat_id"> kehoachsanxuat_thuadat_id </label>
            <input type="text" name="kehoachsanxuat_thuadat_id" id="kehoachsanxuat_thuadat_id" class="form-control @error('kehoachsanxuat_thuadat_id') is-invalid @enderror" value="{{old('kehoachsanxuat_thuadat_id')}}" placeholder="kehoachsanxuat_thuadat_id" autofocus>
            @error('kehoachsanxuat_thuadat_id') <div class="alert alert-danger"> {{$message}} </div>  @enderror
        </div>
        <div class="form-group">
            <label for="ngaytao"> Ngày tạo </label>
            <input type="date" id="ngaytao" name="ngaytao" value="YYYY-MM-DD" placeholder="YYYY-MM-DD">
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
