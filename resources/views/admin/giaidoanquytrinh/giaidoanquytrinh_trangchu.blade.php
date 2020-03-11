@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>GIAI ĐOẠN QUY TRÌNH</strong></h5>
    <a href="{{route('admin.giaidoanquytrinh.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> Quy trình id </th>
		<th> Tên giai đoạn </th>
		<th> Hướng dẫn </th>
		<th> Phương pháp </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsGiaiDoanQuyTrinh ?? [] as $giaiDoanQuyTrinh)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $giaiDoanQuyTrinh->quytrinh_id }} </td>
		  <td> {{ $giaiDoanQuyTrinh->tengiaidoan }} </td>
		  <td> {{ $giaiDoanQuyTrinh->huongdan }} </td>
		  <td> {{ $giaiDoanQuyTrinh->phuongphap }} </td>
          <td class="text-center">
            <form action="{{route('admin.giaidoanquytrinh.xoa', ['id'=>$giaiDoanQuyTrinh->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.giaidoanquytrinh.chinhsua', ['id' => $giaiDoanQuyTrinh->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
