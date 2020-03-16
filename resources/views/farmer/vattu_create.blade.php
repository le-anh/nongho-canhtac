@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.vattu.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Vật tư</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Vật tư <small> Tạo mới </small> </h1>
    </div>
  </header>
  
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.vattu.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="loaivattu_id">Loại vậ tư id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="loaivattu_id" name="loaivattu_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsLoaiVatTu as $key => $loaiVatTu)
                  <option value="{{ $loaiVatTu->id }}">{{ $loaiVatTu->tenloaivattu }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="hoptacxa_id">Hợp tác xã id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="hoptacxa_id" name="hoptacxa_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsHopTacXa as $key => $hopTacXa)
                  <option value="{{ $hopTacXa->id }}">{{ $hopTacXa->tenhtx }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="solo">Số lô <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('solo') is-invalid @enderror" id="solo" name="solo" value="{{old('solo')}}" placeholder="Số lô nhập " autofocus>
              @error('solo')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="tenvattu">Tên vật tư <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('tenvattu') is-invalid @enderror" id="tenvattu" name="tenvattu" value="{{old('tenvattu')}}" placeholder="Tên vật tư" autofocus>
                @error('tenvattu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="loai">Loại <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('loai') is-invalid @enderror" id="loai" name="loai" value="{{old('loai')}}" placeholder="Loại" autofocus>
                @error('loai')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="donvitinh">Đơn vị tính <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('donvitinh') is-invalid @enderror" id="donvitinh" name="donvitinh" value="{{old('donvitinh')}}" placeholder="Đơn vị tính" autofocus>
                @error('donvitinh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="ngaynhap">Ngày nhập <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('ngaynhap') is-invalid @enderror" id="ngaynhap" name="ngaynhap" value="{{old('ngaynhap')}}" placeholder="Ngày nhập" autofocus>
                @error('ngaynhap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('soluong') is-invalid @enderror" id="soluong" name="soluong" value="{{old('soluong')}}" placeholder="Số lượng" autofocus>
                @error('soluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="dongianhap">Đơn giá nhập <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('dongianhap') is-invalid @enderror" id="dongianhap" name="dongianhap" value="{{old('dongianhap')}}" placeholder="Đơn giá nhập" autofocus>
                @error('dongianhap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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