@extends('farmer.layouts.master')

@section('content')
 
<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.donhangchitiet.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Đơn hàng chi tiết</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Đơn hàng chi tiết <small> Tạo mới </small> </h1>
    </div>
  </header>
   
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.donhangchitiet.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="donhang_id">Đơn hàng id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="donhang_id" name="donhang_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsDonHang as $key => $donHang)
                  <option value="{{ $donHang->id }}">{{ $donHang->tongtien }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="vattu_id">Vật tư id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="vattu_id" name="vattu_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsVatTu as $key => $vatTu)
                  <option value="{{ $vatTu->id }}">{{ $vatTu->tenvattu }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="dongia">Đơn giá <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('dongia') is-invalid @enderror" id="dongia" name="dongia" value="{{old('dongia')}}" placeholder="Đơn giá " autofocus>
              @error('dongia')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('soluong') is-invalid @enderror" id="soluong" name="soluong" value="{{old('soluong')}}" placeholder="Số lượng" autofocus>
                @error('soluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="giamgia">Giảm giá <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('giamgia') is-invalid @enderror" id="giamgia" name="giamgia" value="{{old('giamgia')}}" placeholder="Giảm giá" autofocus>
                @error('giamgia')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="text-center">
              <button class="btn btn-primary" type="submit"> <i class="fa fa-save"></i> Lưu </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection