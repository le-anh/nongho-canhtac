@extends('farmer.layouts.master')

@section('content')


<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.donhang.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Đơn hàng</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Đơn hàng <small> Tạo mới </small> </h1>
    </div>
  </header>
  
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.donhang.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="nguoidung_id">Người dùng id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="nguoidung_id" name="nguoidung_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsNguoiDung as $key => $nguoiDung)
                  <option value="{{ $nguoiDung->id }}">{{ $nguoiDung->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="ngaydat">Ngày đặt <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('ngaydat') is-invalid @enderror" id="ngaydat" name="ngaydat" value="{{old('ngaydat')}}" placeholder="Ngày đặt " autofocus>
              @error('ngaydat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="tongtien">Tổng tiền <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('tongtien') is-invalid @enderror" id="tongtien" name="tongtien" value="{{old('tongtien')}}" placeholder="Tổng tiền " autofocus>
                @error('tongtien')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="tientratruoc">Tiền trả trước <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('tientratruoc') is-invalid @enderror" id="tientratruoc" name="tientratruoc" value="{{old('tientratruoc')}}" placeholder="Tiền trả trước" autofocus>
                @error('tientratruoc')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="hantra">Hạn trả <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('hantra') is-invalid @enderror" id="hantra" name="hantra" value="{{old('hantra')}}" placeholder="Hạn trả" autofocus>
                @error('hantra')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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