<?php

/**
 * Người thực hiện	: Võ Phát Đạt
 * Ngày cập nhật	: 17/03/2020
 */

namespace App\Http\Controllers;
use App\QuyTrinh;
use App\NongSan;
use Illuminate\Http\Request;
use App\Http\Requests\QuyTrinhRequest;

class QuyTrinhController extends Controller
{
	public function getIndex()
	{
		return view('farmer.quytrinh_index', ['dsQuyTrinh' => QuyTrinh::all()]);
	}
	
	public function getCreate()
	{
		$nongSan = NongSan::all();
		return view('farmer.quytrinh_create',['nongSan'=>$nongSan]);
	}
	
	public function postCreate(QuyTrinhRequest $request)
	{
		try {
			$quyTrinh = new QuyTrinh();
			$quyTrinh->nongsan_id = $request->nongsan_id;
			$quyTrinh->tenquytrinh = $request->tenquytrinh;
			$quyTrinh->mota = $request->mota;
			$fileName = $request->file('taptin')->getClientOriginalName();
            $quyTrinh->taptin = $fileName;
            $request->file('taptin')->move('resources/upload/', $fileName);
			$quyTrinh->save();
			return redirect()->route('farmer.quytrinh.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{	
		$nongSan = NongSan::all();
		$quyTrinh = QuyTrinh::find($id);
		return view('farmer.quytrinh_edit', ['quyTrinh' => $quyTrinh, 'nongSan' => $nongSan]);
	}
	
	public function postEdit(QuyTrinhRequest $request)
	{
		$quyTrinh = QuyTrinh::findOrFail($request->quytrinhid);
		try {
			$quyTrinh->nongsan_id = $request->nongsan_id;
			$quyTrinh->tenquytrinh = $request->tenquytrinh;
			$quyTrinh->mota = $request->mota;
			$fileName = $request->file('taptin')->getClientOriginalName();
            $quyTrinh->taptin = $fileName;
            $request->file('taptin')->move('resources/upload/', $fileName);
			$quyTrinh->save();
			return redirect()->route('farmer.quytrinh.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			QuyTrinh::destroy($id);
			return redirect()->route('farmer.quytrinh.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}