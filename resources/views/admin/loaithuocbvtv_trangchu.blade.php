@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Loại thuốc BVTV</strong></h5>
    <a href="{{route('admin.loaithuocbvtv.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> id </th>
        <th> Loại thuốc bvtv </th>
        <th> Mô tả </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsLoaiThuocBvtv ?? [] as $loaiThuocBvtv)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $loaiThuocBvtv->id }} </td>
          <td> {{ $loaiThuocBvtv->tenloaithuocbvtv }} </td>
          <td> {{ $loaiThuocBvtv->mota }} </td>
          <td class="text-center">
            <form action="{{route('admin.loaithuocbvtv.xoa', ['id'=>$loaiThuocBvtv->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.loaithuocbvtv.chinhsua', ['id' => $loaiThuocBvtv->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
