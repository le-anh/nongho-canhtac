@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>SỔ CANH TÁC</strong></h5>
    <a href="{{route('admin.socanhtac.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
        <th> kehoachsanxuat_thuadat_id </th>
    		<th> Ngày tạo </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsSoCanhTac ?? [] as $soCanhTac)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $soCanhTac->kehoachsanxuat_thuadat_id }} </td>
    		  <td> {{ $soCanhTac->ngaytao }} </td>
          <td class="text-center">
            <form action="{{route('admin.socanhtac.xoa', ['id'=>$soCanhTac->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.socanhtac.chinhsua', ['id' => $soCanhTac->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
