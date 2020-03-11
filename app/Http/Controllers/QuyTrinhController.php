<?php

namespace App\Http\Controllers;
use App\QuyTrinh;
use App\Http\Requests\QuyTrinhRequest;
use Illuminate\Http\Request;
use Input,File;

class QuyTrinhController extends Controller
{
    public function trangchu()
    {
        return view('admin.quytrinh.quytrinh_trangchu', ['dsQuyTrinh' => QuyTrinh::all()]);
    }

    public function taomoi()
    {
        return view('admin.quytrinh.quytrinh_taomoi');
    }

    public function luu(QuyTrinhRequest $request)
    {
        try {
            $quyTrinh = new QuyTrinh();
			$quyTrinh->tenquytrinh = $request->tenquytrinh;
            $quyTrinh->nongsan_id = $request->nongsan_id;
			$quyTrinh->mota = $request->mota;
			$fileName = $request->file('taptin')->getClientOriginalName();
            $quyTrinh->taptin = $fileName;
            $request->file('taptin')->move('resources/upload/', $fileName);
            $quyTrinh->save();
        return redirect()->route('admin.quytrinh.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
           return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.quytrinh.quytrinh_chinhsua', ['quyTrinh' => QuyTrinh::findOrFail($id)]);
    }

    public function capnhat(QuyTrinhRequest $request)
    {
        $quyTrinh = QuyTrinh::findOrFail($request->id);
        try {
			$quyTrinh->tenquytrinh = $request->tenquytrinh;
            $quyTrinh->nongsan_id = $request->nongsan_id;
			$quyTrinh->mota = $request->mota;
			$fileName = $request->file('taptin')->getClientOriginalName();
            $quyTrinh->taptin = $fileName;
            $request->file('taptin')->move('resources/upload/', $fileName);
            $quyTrinh->save();
            return redirect()->route('admin.quytrinh.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            QuyTrinh::destroy($id);
            return redirect()->route('admin.quytrinh.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
