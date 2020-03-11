<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiPhanBon;
use App\Http\Requests\LoaiPhanBonRequest;

class LoaiPhanBonController extends Controller
{
    public function trangchu()
    {
        return view('admin.loaiphanbon.loaiphanbon_trangchu', ['dsLoaiPhanBon' => LoaiPhanBon::all()]);
    }

    public function taomoi()
    {
        return view('admin.loaiphanbon.loaiphanbon_taomoi');
    }

    public function luu(LoaiPhanBonRequest $request)
    {
        try {
            $loaiPhanBon = new loaiphanbon();
            $loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
            $loaiPhanBon->mota = $request->mota;
            $loaiPhanBon->save();
            return redirect()->route('admin.loaiphanbon.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }

    }

    public function chinhsua($id)
    {
        return view('admin.loaiphanbon.loaiphanbon_chinhsua', ['loaiPhanBon' => LoaiPhanBon::findOrFail($id)]);
    }

    public function capnhat(LoaiPhanBonRequest $request)
    {
        $loaiPhanBon = LoaiPhanBon::findOrFail($request->id);
        try {
            $loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
            $loaiPhanBon->mota = $request->mota;
            $loaiPhanBon->save();
            return redirect()->route('admin.loaiphanbon.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            LoaiPhanBon::destroy($id);
            return redirect()->route('admin.loaiphanbon.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
