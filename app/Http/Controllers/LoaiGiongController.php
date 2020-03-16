<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiGiong;
use Illuminate\Http\Request;

class LoaiGiongController extends Controller
{
	public function getIndex()
	{
		return view('farmer.loaigiong_index', ['dsLoaiGiong' => LoaiGiong::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.loaigiong_create');
	}
	
	public function postCreate(Request $request)
	{
		try {
			$loaiGiong = new LoaiGiong();
			$loaiGiong->tenloaigiong = $request->tenloaigiong;
			$loaiGiong->mota = $request->mota;
			$loaiGiong->save();
			return redirect()->route('farmer.loaigiong.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{
		return view('farmer.loaigiong_edit', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{
		$loaiGiong = LoaiGiong::findOrFail($request->loaigiongid);
		try {
			$loaiGiong->tenloaigiong = $request->tenloaigiong;
			$loaiGiong->mota = $request->mota;
			$loaiGiong->save();
			return redirect()->route('farmer.loaigiong.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			LoaiGiong::destroy($id);
			return redirect()->route('farmer.loaigiong.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
