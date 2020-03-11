<?php

namespace App\Http\Controllers;
use App\PhanBon;
use App\Http\Requests\PhanBonRequest;
use Illuminate\Http\Request;

class PhanBonController extends Controller
{
    public function trangchu()
    {
        return view('admin.phanbon.phanbon_trangchu', ['dsPhanBon' => PhanBon::all()]);
    }

    public function taomoi()
    {
        return view('admin.phanbon.phanbon_taomoi');
    }

    public function luu(PhanBonRequest $request)
    {
        try {
            $phanBon = new PhanBon();
			$phanBon->loaiphanbon_id = $request->loaiphanbon_id;
            $phanBon->tenphanbon = $request->tenphanbon;
			$phanBon->dactinh = $request->dactinh;
			$phanBon->thanhphanhamluong = $request->thanhphanhamluong;
			$phanBon->nhacungcap = $request->nhacungcap;
            $phanBon->ghichu = $request->ghichu;
            $phanBon->save();
            return redirect()->route('admin.phanbon.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.phanbon.phanbon_chinhsua', ['phanBon' => PhanBon::findOrFail($id)]);
    }

    public function capnhat(PhanBonRequest $request)
    {
        $phanBon = PhanBon::findOrFail($request->id);
        try {
            $phanBon->loaiphanbon_id = $request->loaiphanbon_id;
            $phanBon->tenphanbon = $request->tenphanbon;
			$phanBon->dactinh = $request->dactinh;
			$phanBon->thanhphanhamluong = $request->thanhphanhamluong;
			$phanBon->nhacungcap = $request->nhacungcap;
            $phanBon->ghichu = $request->ghichu;
            $phanBon->save();
            return redirect()->route('admin.phanbon.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            PhanBon::destroy($id);
            return redirect()->route('admin.phanbon.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
