@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Loại giống</strong></h5>
    <a href="{{route('admin.loaigiong.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> Loại giống </th>
        <th> Mô tả </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsLoaiGiong ?? [] as $loaiGiong)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $loaiGiong->tenloaigiong }} </td>
          <td> {{ $loaiGiong->mota }} </td>
          <td class="text-center">
            <form action="{{route('admin.loaigiong.xoa', ['id'=>$loaiGiong->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.loaigiong.chinhsua', ['id' => $loaiGiong->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
