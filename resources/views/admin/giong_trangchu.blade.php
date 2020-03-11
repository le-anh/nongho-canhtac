@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Giống</strong></h5>
    <a href="{{route('admin.giong.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
         <th> Mã giống </th>
        <th> Giống </th>
         <th> Đặc tính </th>
          <th> Màu sắc </th>
        <th> Mô tả </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsGiong ?? [] as $giong)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $giong->id }} </td>
          <td> {{ $giong->tengiong }} </td>
          <td> {{ $giong->dactinh }} </td>
          <td> {{ $giong->mausac }} </td>
          <td> {{ $giong->mota }} </td>
          <td class="text-center">
            <form action="{{route('admin.giong.xoa', ['id'=>$giong->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.giong.chinhsua', ['id' => $giong->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
