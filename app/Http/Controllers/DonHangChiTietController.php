<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;


use App\DonHang;
use Illuminate\Http\Request;
use App\DonHang_ChiTiet;
use App\VatTu;

class DonHangChiTietController extends Controller
{
	public function getIndex()
	{
		return view('farmer.donhangchitiet_index', ['dsDonHangChiTiet' => DonHang_ChiTiet::all()]);
	}
	
	public function getCreate()
	{
		$dsDonHang = DonHang::all();
		$dsVatTu = VatTu::all();
   		return view('farmer.donhangchitiet_create', compact('dsDonHang','dsVatTu'));
	}
	
	public function postCreate(Request $request)
	{
		try {
			$donHangChiTiet = new DonHang_ChiTiet();
			$donHangChiTiet->donhang_id = $request->donhang_id;
			$donHangChiTiet->vattu_id = $request->vattu_id;
			$donHangChiTiet->dongia = $request->dongia;
			$donHangChiTiet->soluong = $request->soluong;
			$donHangChiTiet->giamgia = $request->giamgia;
			$donHangChiTiet->save();
			return redirect()->route('farmer.donhangchitiet.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
		return view('farmer.donhangchitiet_index', ['dsDonHangChiTiet' => DonHang_ChiTiet::all()]);
	}
	
	public function getEdit($id)
	{
		return view('farmer.donhangchitiet_edit', ['donHangChiTiet' => DonHang_ChiTiet::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{		
		$donHangChiTiet = DonHang_ChiTiet::findOrFail($request->donhangchitietid);
		try {
			$donHangChiTiet->donhang_id = $request->donhang_id;
			$donHangChiTiet->vattu_id = $request->vattu_id;
			$donHangChiTiet->dongia = $request->dongia;
			$donHangChiTiet->soluong = $request->soluong;
			$donHangChiTiet->giamgia = $request->giamgia;
			$donHangChiTiet->save();
			return redirect()->route('farmer.donhangchitiet.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getDelete($id)
	{
		
	}	
	public function postDelete($id)
	{
		try {
			DonHang_ChiTiet::destroy($id);
			return redirect()->route('farmer.donhangchitiet.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
