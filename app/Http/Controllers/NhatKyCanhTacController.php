<?php

namespace App\Http\Controllers;
use App\NhatKyCanhTac;
use App\Http\Requests\NhatKyCanhTacRequest;
use Illuminate\Http\Request;

class NhatKyCanhTacController extends Controller
{
    public function trangchu()
    {
        return view('admin.nhatkycanhtac.nhatkycanhtac_trangchu', ['dsNhatKyCanhTac' => NhatKyCanhTac::all()]);
    }

    public function taomoi()
    {
        return view('admin.nhatkycanhtac.nhatkycanhtac_taomoi');
    }

    public function luu(NhatKyCanhTacRequest $request)
    {
        try {
            $nhatKyCanhTac = new NhatKyCanhTac();
			$nhatKyCanhTac->socanhtac_id = $request->socanhtac_id;
            $nhatKyCanhTac->giaidoanquytrinh_id = $request->giaidoanquytrinh_id;
			$nhatKyCanhTac->ngaythuchien = $request->ngaythuchien;
			$nhatKyCanhTac->nguoithuchien = $request->nguoithuchien;
			$nhatKyCanhTac->tongchiphi = $request->tongchiphi;
            $nhatKyCanhTac->thongtin = $request->thongtin;
            $nhatKyCanhTac->save();
            return redirect()->route('admin.nhatkycanhtac.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.nhatkycanhtac.nhatkycanhtac_chinhsua', ['nhatKyCanhTac' => NhatKyCanhTac::findOrFail($id)]);
    }

    public function capnhat(NhatKyCanhTacRequest $request)
    {
        $nhatKyCanhTac = NhatKyCanhTac::findOrFail($request->id);
        try {
            $nhatKyCanhTac->socanhtac_id = $request->socanhtac_id;
            $nhatKyCanhTac->giaidoanquytrinh_id = $request->giaidoanquytrinh_id;
			$nhatKyCanhTac->ngaythuchien = $request->ngaythuchien;
			$nhatKyCanhTac->nguoithuchien = $request->nguoithuchien;
			$nhatKyCanhTac->tongchiphi = $request->tongchiphi;
            $nhatKyCanhTac->thongtin = $request->thongtin;
            $nhatKyCanhTac->save();
            return redirect()->route('admin.nhatkycanhtac.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            NhatKyCanhTac::destroy($id);
            return redirect()->route('admin.nhatkycanhtac.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
