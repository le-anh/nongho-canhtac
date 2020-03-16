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
      <h1 class="page-title mr-sm-auto"> Đơn hàng chi tiết <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.donhangchitiet.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="donhangchitietid" value=" {{ $donHangChiTiet->id }} ">

          <fieldset>
            <div class="form-group">
                <label for="donhang_id">Loai vật tư id <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('donhang_id') is-invalid @enderror" id="donhang_id" name="donhang_id" value="{{old('donhang_id',  $donHangChiTiet->donhang_id)}}" placeholder="Đơn hàng id" autofocus>
                @error('donhang_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="vattu_id">Hợp tác xã id <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('vattu_id') is-invalid @enderror" id="vattu_id" name="vattu_id" value="{{old('vattu_id',  $donHangChiTiet->vattu_id)}}" placeholder="Vật tư id" autofocus>
                @error('vattu_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="dongia">Đơn giá <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('dongia') is-invalid @enderror" id="dongia" name="dongia" value="{{old('dongia',  $donHangChiTiet->dongia)}}" placeholder="Đơn giá" autofocus>
              @error('dongia')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('soluong') is-invalid @enderror" id="soluong" name="soluong" value="{{old('soluong',  $donHangChiTiet->soluong)}}" placeholder="Số lượng" autofocus>
                @error('soluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="giamgia">Giảm giá <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('giamgia') is-invalid @enderror" id="giamgia" name="giamgia" value="{{old('giamgia',  $donHangChiTiet->giamgia)}}" placeholder="Giảm giá" autofocus>
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