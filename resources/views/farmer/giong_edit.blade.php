@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.giong.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Giống</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Giống <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.giong.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="giongid" value=" {{ $giong->id }} ">

          <fieldset>
            <div class="form-group">
                <label for="loaigiong_id">Loại giống id <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('loaigiong_id') is-invalid @enderror" id="loaigiong_id" name="loaigiong_id" value="{{old('loaigiong_id',  $giong->loaigiong_id)}}" placeholder="Loại giống" autofocus>
                @error('loaigiong_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="tengiong">Tên giống<abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tengiong') is-invalid @enderror" id="tengiong" name="tengiong" value="{{old('tengiong',  $giong->tengiong)}}" placeholder="Tên giống" autofocus>
              @error('tengiong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="dactinh">Đặc tính <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('dactinh') is-invalid @enderror" id="dactinh" name="dactinh" value="{{old('dactinh',  $giong->dactinh)}}" placeholder="Đặc tính" autofocus>
                @error('dactinh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="mausac">Màu sắc <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('mausac') is-invalid @enderror" id="mausac" name="mausac" value="{{old('mausac',  $giong->mausac)}}" placeholder="Màu sắc" autofocus>
                @error('mausac')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota', $giong->mota)}}</textarea>
              @error('mota')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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