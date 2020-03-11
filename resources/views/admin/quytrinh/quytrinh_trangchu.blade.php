@extends('layouts.app')

@section('content')
<div class="container rounded">
  <div class="title">
    <h5 class="pull-left"><strong>Quy Trình</strong></h5>
    <a href="{{route('admin.quytrinh.taomoi')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i></a>
  </div>
  <table class="table table-striped table-responsive-md">
    <thead>
      <tr>
        <th class="text-center"> # </th>
		<th> Tên quy trình </th>
		<th> Nông sản id </th>
		<th> Mô tả </th>
		<th> Tập tin </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($dsQuyTrinh ?? [] as $quyTrinh)
        <tr>
          <td class="text-center"> {{ $loop->iteration }} </td>
          <td> {{ $quyTrinh->tenquytrinh }} </td>
		  <td> {{ $quyTrinh->nongsan_id }} </td>
		  <td> {{ $quyTrinh->mota }} </td>
		  <td> {{ $quyTrinh->taptin }} </td>
          <td class="text-center">
            <form action="{{route('admin.quytrinh.xoa', ['id'=>$quyTrinh->id])}}" method="post">
              @csrf()
              @method('DELETE')
              <a href="{{ route('admin.quytrinh.chinhsua', ['id' => $quyTrinh->id]) }}" class="btn btn-warning" title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
              <button type="submit" class="btn btn-danger btn-delete" title="Xóa"> <i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>        
</div>
@endsection
