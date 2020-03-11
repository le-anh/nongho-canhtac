<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SoCanhTac;
use App\Http\Requests\SoCanhTacRequest;

class SoCanhTacController extends Controller
{
    public function trangchu()
    {
        return view('admin.socanhtac.socanhtac_trangchu', ['dsSoCanhTac' => SoCanhTac::all()]);
    }

    public function taomoi()
    {
        return view('admin.socanhtac.socanhtac_taomoi');
    }

    public function luu(SoCanhTacRequest $request)
    {
        try {
            $soCanhTac = new SoCanhTac();
            $soCanhTac->kehoachsanxuat_thuadat_id = $request->kehoachsanxuat_thuadat_id;
            $soCanhTac->ngaytao = $request->ngaytao;
            $soCanhTac->save();
            return redirect()->route('admin.socanhtac.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }

    }

    public function chinhsua($id)
    {
        return view('admin.socanhtac.socanhtac_chinhsua', ['loaiPhanBon' => SoCanhTac::findOrFail($id)]);
    }

    public function capnhat(SoCanhTacRequest $request)
    {
        $soCanhTac = SoCanhTac::findOrFail($request->id);
        try {
            $soCanhTac->kehoachsanxuat_thuadat_id = $request->kehoachsanxuat_thuadat_id;
            $soCanhTac->ngaytao = $request->ngaytao;
            $soCanhTac->save();
            return redirect()->route('admin.socanhtac.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            SoCanhTac::destroy($id);
            return redirect()->route('admin.socanhtac.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
