@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <a href=" {{ route('farmer.donhang.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>

    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Đơn hàng </h1>
      <div id="dt-buttons" class="btn-toolbar"></div>
    </div>
  </header>
  <div class="page-section">

    <div class="card card-fluid">
								
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <table id="table-datatable-default" class="table">
          <thead>
            <tr> 
              <th class="text-center"> # </th>
              <th> Người dùng id </th>
              <th> Ngày đặt </th>
              <th> Tổng tiền </th>
              <th> Tiền trả trước </th>
              <th> Hạn trả </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          @foreach($dsDonHang ?? [] as $donHang)
          <tr> 
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $donHang->nguoidung->hoten }} </td>
            <td> {{ $donHang->ngaydat }} </td>
            <td> {{ $donHang->tongtien }} </td>
            <td> {{ $donHang->tientratruoc }} </td>
            <td> {{ $donHang->hantra }} </td>
            <td class="text-center">
              <form action="{{route('farmer.donhang.delete', ['id'=>$donHang->id])}}" method="post">
                @csrf()
                @method('DELETE')
                <a href="{{ route('farmer.donhang.edit', ['id' => $donHang->id]) }}" class="btn btn-warning btn-sm btn-icon " title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection