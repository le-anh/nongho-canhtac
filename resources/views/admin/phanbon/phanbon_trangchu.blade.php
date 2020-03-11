@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Phân bón</strong></h5>
    <a href="{{route('admin.phanbon.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> Loại phân bón id </th>
    		<th> Tên phân bón </th>
    		<th> Đặc tính </th>
    		<th> Thành phần hàm lượng </th>
    		<th> Nhà cung cấp </th>
        <th> Ghi chú </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsPhanBon ?? [] as $phanBon)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $phanBon->loaiphanbon_id }} </td>
    		  <td> {{ $phanBon->tenphanbon }} </td>
    		  <td> {{ $phanBon->dactinh }} </td>
    		  <td> {{ $phanBon->thanhphanhamluong }} </td>
    		  <td> {{ $phanBon->nhacungcap }} </td>
          <td> {{ $phanBon->ghichu }} </td>
          <td class="text-center">
            <form action="{{route('admin.phanbon.xoa', ['id'=>$phanBon->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.phanbon.chinhsua', ['id' => $phanBon->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
