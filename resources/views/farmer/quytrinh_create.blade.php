@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.quytrinh.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Quy trình</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Quy trình <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.quytrinh.store') }} " method="post" enctype="multipart/form-data">
          @csrf()
          <fieldset>
			<div class="form-group">
              <label for="tenquytrinh">Tên quy trình <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenquytrinh') is-invalid @enderror" id="tenquytrinh" name="tenquytrinh" value="{{old('tenquytrinh')}}" placeholder="Tên quy trình" autofocus>
              @error('tenquytrinh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="nongsan_id">Nông sản <abbr title="Required">*</abbr></label>
				<div >		
                    <select name="nongsan_id" id="nongsan_id" class="form-control">
                            <option value="">--Chọn nông sản--</option>
							@foreach($nongSan as $value)
								<option value= "{{ $value->id }}"> {{$value->tennongsan}} </option>
							@endforeach
                    </select>
				</div>
     
            </div>
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota')}}</textarea>
              @error('mota')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
				<label for="taptin">Tập tin</label>
				<input type="file" name="taptin" class="form-control" id="taptin">
				@error('taptin') <div class="alert alert-danger"> {{$message}} </div>  @enderror
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