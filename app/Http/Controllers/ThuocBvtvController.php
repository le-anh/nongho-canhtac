<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThuocBvtv;
use App\Http\Requests\ThuocBvtvRequest;

class ThuocBvtvController extends Controller
{
    public function trangchu()
    {
        return view('admin.thuocbvtv_trangchu', ['dsThuocBvtv' => ThuocBvtv::all()]);
    }

    public function taomoi()
    {
        return view('admin.thuocbvtv_taomoi');
    }

    public function luu(ThuocBvtvRequest $request)
    {
        try {
            $thuocBvtv = new ThuocBvtv();
            $thuocBvtv->id = $request->id;
            $thuocBvtv->tenthuocbvtv = $request->tenthuocbvtv;
            $thuocBvtv->mucdich = $request->mucdich;
            $thuocBvtv->nguongoc = $request->nguongoc;
            $thuocBvtv->thanhphanhamluong = $request->thanhphanhamluong;
            $thuocBvtv->nhacungcap = $request->nhacungcap;
            $thuocBvtv->mota = $request->mota;
            $thuocBvtv->save();
            return redirect()->route('admin.thuocbvtv.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.thuocbvtv_chinhsua', ['thuocBvtv' => ThuocBvtv::findOrFail($id)]);
    }

    public function capnhat(ThuocBvtvRequest $request)
    {
        $thuocBvtv = ThuocBvtv::findOrFail($request->id);
        try {
            $thuocBvtv->id = $request->id;
            $thuocBvtv->tenthuocbvtv = $request->tenthuocbvtv;
            $thuocBvtv->mucdich = $request->mucdich;
            $thuocBvtv->nguongoc = $request->nguongoc;
            $thuocBvtv->thanhphanhamluong = $request->thanhphanhamluong;
            $thuocBvtv->nhacungcap = $request->nhacungcap;
            $thuocBvtv->mota = $request->mota;
            $thuocBvtv->save();
            return redirect()->route('admin.thuocbvtv.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            ThuocBvtv::destroy($id);
            return redirect()->route('admin.thuocbvtv.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
