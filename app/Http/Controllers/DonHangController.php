<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\DonHang;
use Illuminate\Http\Request;
use App\NguoiDung;

class DonHangController extends Controller
{
	public function getIndex()
	{
		return view('farmer.donhang_index', ['dsDonHang' => DonHang::all()]);
	}
	
	public function getCreate()
	{
		$dsNguoiDung = NguoiDung::all();
   		return view('farmer.donhang_create', compact('dsNguoiDung'));
	}
	
	
	public function postCreate(Request $request)
	{
		try {
			$donHang = new DonHang();
			$donHang->nguoidung_id = $request->nguoidung_id;
			$donHang->ngaydat = $request->ngaydat;
			$donHang->tongtien = $request->tongtien;
			$donHang->tientratruoc = $request->tientratruoc;
			$donHang->hantra = $request->hantra;
			$donHang->save();
			return redirect()->route('farmer.donhang.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
		return view('farmer.donhang_index', ['dsDonHang' => DonHang::all()]);
	}
	
	public function getEdit($id)
	{
		return view('farmer.donhang_edit', ['donHang' => DonHang::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{		
		$donHang = DonHang::findOrFail($request->donhangid);
		try {
			$donHang->nguoidung_id = $request->nguoidung_id;
			$donHang->ngaydat = $request->ngaydat;
			$donHang->tongtien = $request->tongtien;
			$donHang->tientratruoc = $request->tientratruoc;
			$donHang->tientratruoc = $request->tientratruoc;
			$donHang->hantra = $request->hantra;
			$donHang->save();
			return redirect()->route('farmer.donhang.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			DonHang::destroy($id);
			return redirect()->route('farmer.donhang.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
