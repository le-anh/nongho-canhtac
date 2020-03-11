@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Thuốc BVTV</strong></h5>
    <a href="{{route('admin.thuocbvtv.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> ID </th>
        <th> Tên thuốc BVTV </th>
        <th> Mục đích </th>
        <th> Nguồn gốc </th>
        <th> Thành phần hàm lượng </th>
        <th> Nhà cung cấp </th>
        <th> Mô tả </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsThuocBvtv ?? [] as $thuocBvtv)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $thuocBvtv->id }} </td>
          <td> {{ $thuocBvtv->tenthuocbvtv }} </td>
          <td> {{ $thuocBvtv->mucdich }} </td>
          <td> {{ $thuocBvtv->nguongoc }} </td>
          <td> {{ $thuocBvtv->thanhphanhamluong }} </td>
          <td> {{ $thuocBvtv->nhacungcap }} </td>
          <td> {{ $thuocBvtv->mota }} </td>
          <td class="text-center">
            <form action="{{route('admin.thuocbvtv.xoa', ['id'=>$thuocBvtv->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.thuocbvtv.chinhsua', ['id' => $thuocBvtv->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
