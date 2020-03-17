<?php

/**
 * Người thực hiện	: Võ Phát Đạt
 * Ngày cập nhật	: 17/03/2020
 */

namespace App\Http\Controllers;
use App\GiaiDoanQuyTrinh;
use App\QuyTrinh;
use Illuminate\Http\Request;
use App\Http\Requests\GiaiDoanQuyTrinhRequest;

class GiaiDoanQuyTrinhController extends Controller
{
	public function getIndex()
	{
		return view('farmer.giaidoanquytrinh_index', ['dsGiaiDoanQuyTrinh' => GiaiDoanQuyTrinh::all()]);
	}
	
	public function getCreate()
	{
		$quyTrinh = QuyTrinh::all();
		return view('farmer.giaidoanquytrinh_create',['quyTrinh'=>$quyTrinh]);
	}
	
	public function postCreate(GiaiDoanQuyTrinhRequest $request)
	{
		try {
			$giaiDoanQuyTrinh = new GiaiDoanQuyTrinh();
			$giaiDoanQuyTrinh->quytrinh_id = $request->quytrinh_id;
			$giaiDoanQuyTrinh->tengiaidoan = $request->tengiaidoan;
			$giaiDoanQuyTrinh->huongdan = $request->huongdan;
			$giaiDoanQuyTrinh->phuongphap = $request->phuongphap;
			$giaiDoanQuyTrinh->save();
			return redirect()->route('farmer.giaidoanquytrinh.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{	
		$quyTrinh = QuyTrinh::all();
		$giaiDoanQuyTrinh = GiaiDoanQuyTrinh::find($id);
		return view('farmer.giaidoanquytrinh_edit', ['giaiDoanQuyTrinh' => $giaiDoanQuyTrinh, 'quyTrinh' => $quyTrinh]);
	}
	
	public function postEdit(GiaiDoanQuyTrinhRequest $request)
	{
		$giaiDoanQuyTrinh = GiaiDoanQuyTrinh::findOrFail($request->giaidoanquytrinhid);
		try {
			$giaiDoanQuyTrinh->quytrinh_id = $request->quytrinh_id;
			$giaiDoanQuyTrinh->tengiaidoan = $request->tengiaidoan;
			$giaiDoanQuyTrinh->huongdan = $request->huongdan;
			$giaiDoanQuyTrinh->phuongphap = $request->phuongphap;
			$giaiDoanQuyTrinh->save();
			return redirect()->route('farmer.giaidoanquytrinh.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			GiaiDoanQuyTrinh::destroy($id);
			return redirect()->route('farmer.giaidoanquytrinh.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}