@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>NHẬT KÝ CANH TÁC</strong></h5>
    <a href="{{route('admin.nhatkycanhtac.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> Sổ canh tác id </th>
    		<th> Giai đoạn quy trình id </th>
    		<th> Ngày thực hiện </th>
    		<th> Người thực hiện </th>
    		<th> Tổng chi phí </th>
        <th> Thông tin </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsNhatKyCanhTac ?? [] as $nhatKyCanhTac)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $nhatKyCanhTac->socanhtac_id }} </td>
    		  <td> {{ $nhatKyCanhTac->giaidoanquytrinh_id }} </td>
    		  <td> {{ $nhatKyCanhTac->ngaythuchien }} </td>
    		  <td> {{ $nhatKyCanhTac->nguoithuchien }} </td>
    		  <td> {{ $nhatKyCanhTac->tongchiphi }} </td>
          <td> {{ $nhatKyCanhTac->thongtin }} </td>
          <td class="text-center">
            <form action="{{route('admin.nhatkycanhtac.xoa', ['id'=>$nhatKyCanhTac->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.nhatkycanhtac.chinhsua', ['id' => $nhatKyCanhTac->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
