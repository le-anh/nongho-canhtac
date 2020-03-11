<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiThuocBvtv;
use App\Http\Requests\LoaiThuocBvtvRequest;

class LoaiThuocBvtvController extends Controller
{
    public function trangchu()
    {
        return view('admin.loaithuocbvtv_trangchu', ['dsLoaiThuocBvtv' => LoaiThuocBvtv::all()]);
    }

    public function taomoi()
    {
        return view('admin.loaithuocbvtv_taomoi');
    }

    public function luu(LoaiThuocBvtvRequest $request)
    {
        try {
            $loaiThuocBvtv = new LoaiThuocBvtv();
            $loaiThuocBvtv->id = $request->id;
            $loaiThuocBvtv->tenloaithuocbvtv = $request->tenloaithuocbvtv;
            $loaiThuocBvtv->mota = $request->mota;
            $loaiThuocBvtv->save();
            return redirect()->route('admin.loaithuocbvtv.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.loaithuocbvtv_chinhsua', ['loaiThuocBvtv' => LoaiThuocBvtv::findOrFail($id)]);
    }

    public function capnhat(LoaiThuocBvtvRequest $request)
    {
        $loaiThuocBvtv = LoaiThuocBvtv::findOrFail($request->id);
        try {
            $loaiThuocBvtv->id = $request->id;
            $loaiThuocBvtv->tenloaithuocbvtv = $request->tenloaithuocbvtv;
            $loaiThuocBvtv->mota = $request->mota;
            $loaiThuocBvtv->save();
            return redirect()->route('admin.loaithuocbvtv.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            LoaiThuocBvtv::destroy($id);
            return redirect()->route('admin.loaithuocbvtv.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
