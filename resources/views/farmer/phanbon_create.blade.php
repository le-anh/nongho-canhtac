@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.phanbon.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Phân bón</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Phân bón <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.phanbon.store') }} " method="post">
          @csrf()
          <fieldset>
			<div class="form-group">
              <label for="loaiphanbon_id">Loại phân bón <abbr title="Required">*</abbr></label>
				<div >		
                    <select name="loaiphanbon_id" id="loaiphanbon_id" class="form-control">
                            <option value="">--Chọn loại phân bón--</option>
							@foreach($loaiPhanBon as $value)
								<option value= "{{ $value->id }}"> {{$value->tenloaiphanbon}} </option>
							@endforeach
                    </select>
				</div>
     
            </div>
			<div class="form-group">
              <label for="tenphanbon">Tên phân bón <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenphanbon') is-invalid @enderror" id="tenphanbon" name="tenphanbon" value="{{old('tenphanbon')}}" placeholder="Tên phân bón" autofocus>
              @error('tenphanbon')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="dactinh">Đặc tính <abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('dactinh') is-invalid @enderror" id="dactinh" name="dactinh" rows="2" placeholder="Đặc tính" autofocus>{{old('dactinh')}}</textarea>
              @error('dactinh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="thanhphanhamluong">Thành phần hàm lượng <abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('thanhphanhamluong') is-invalid @enderror" id="thanhphanhamluong" name="thanhphanhamluong" rows="2" placeholder="Thành phần hàm lượng" autofocus>{{old('mota')}}</textarea>
              @error('thanhphanhamluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="nhacungcap">Nhà cung cấp <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('nhacungcap') is-invalid @enderror" id="nhacungcap" name="nhacungcap" value="{{old('nhacungcap')}}" placeholder="Nhà cung cấp" autofocus>
              @error('nhacungcap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota')}}</textarea>
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