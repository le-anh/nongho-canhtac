@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.giaidoanquytrinh.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Giai đoạn quy trình</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Giai đoạn quy trình <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.giaidoanquytrinh.update') }} " method="post" >
          @csrf()
          @method('PUT')
          <input type="hidden" name="giaidoanquytrinhid" value=" {{ $giaiDoanQuyTrinh->id }} ">
          <fieldset>
            <div class="form-group">
              <label for="quytrinh_id">Quy trình <abbr title="Required">*</abbr></label>
				<div >		
                    <select name="quytrinh_id" id="quytrinh_id" class="form-control">
                            <option value="">--Chọn quy trình--</option>
							@foreach($quyTrinh as $value)
								<option value= "{{ $value->id }}"> {{$value->tenquytrinh}} </option>
							@endforeach
                    </select>
				</div>
     
            </div>
			<div class="form-group">
              <label for="tengiaidoan">Tên giai đoạn <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tengiaidoan') is-invalid @enderror" id="tengiaidoan" name="tengiaidoan" value="{{old('tengiaidoan',  $giaiDoanQuyTrinh->tengiaidoan)}}" placeholder="Tên giai đoạn" autofocus>
              @error('tengiaidoan')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="huongdan">Hướng dẫn<abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('huongdan') is-invalid @enderror" id="huongdan" name="huongdan" rows="2" placeholder="Hướng dẫn" autofocus>{{old('huongdan', $giaiDoanQuyTrinh->huongdan)}}</textarea>
              @error('huongdan')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="phuongphap">Phương pháp </label>
              <textarea class="form-control @error('phuongphap') is-invalid @enderror" id="phuongphap" name="phuongphap" rows="2" placeholder="Phương pháp" autofocus>{{old('phuongphap', $giaiDoanQuyTrinh->phuongphap)}}</textarea>
              @error('phuongphap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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