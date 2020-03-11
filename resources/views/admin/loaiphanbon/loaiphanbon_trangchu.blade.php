@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Loại phân bón</strong></h5>
    <a href="{{route('admin.loaiphanbon.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
    		<th> Tên loại phân bón </th>
        <th> Mô tả </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsLoaiPhanBon ?? [] as $loaiPhanBon)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
    		  <td> {{ $loaiPhanBon->tenloaiphanbon }} </td>
			  <td> {{ $loaiPhanBon->mota }} </td>
          <td class="text-center">
            <form action="{{route('admin.loaiphanbon.xoa', ['id'=>$loaiPhanBon->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.loaiphanbon.chinhsua', ['id' => $loaiPhanBon->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
