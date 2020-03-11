@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
      <a href="{{ route('admin.thuocbvtv.trangchu') }}"> 
        <div class="card text-center">
          <div class="card-body">
              <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="card-footer text-muted">
              Thuốc BVTV
          </div>
        </div>
      </a>
    </div>
  </div>
  Tiếp theo!
</div>
@endsection
