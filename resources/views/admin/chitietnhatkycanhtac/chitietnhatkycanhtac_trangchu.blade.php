@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>CHI TIẾT NHẬT KÝ CANH TÁC</strong></h5>
    <a href="{{route('admin.nhatkycanhtac_chitiet.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
			<th> Nhật ký canh tác id </th>
    		<th> Vật tư id </th>
    		<th> Phương tiện sản xuất id </th>
			<th> Tên vật tư phương tiện </th>
    		<th> Đơn giá </th>
    		<th> Số lượng </th>
			<th> Thông tin </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsChiTietNhatKyCanhTac ?? [] as $chiTietNhatKyCanhTac)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
			<td> {{ $chiTietNhatKyCanhTac->nhatkycanhtac_id }} </td>
    		<td> {{ $chiTietNhatKyCanhTac->vattu_id }} </td>
    		<td> {{ $chiTietNhatKyCanhTac->phuongtiensx_id }} </td>
    		<td> {{ $chiTietNhatKyCanhTac->tenvattuphuongtien }} </td>
    		<td> {{ $chiTietNhatKyCanhTac->dongia }} </td>
			<td> {{ $chiTietNhatKyCanhTac->soluong }} </td>
			<td> {{ $chiTietNhatKyCanhTac->thongtin }} </td>
          <td class="text-center">
            <form action="{{route('admin.nhatkycanhtac_chitiet.xoa', ['id'=>$chiTietNhatKyCanhTac->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.nhatkycanhtac_chitiet.chinhsua', ['id' => $chiTietNhatKyCanhTac->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
