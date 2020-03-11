<?php

namespace App\Http\Controllers;
use App\ChiTietNhatKyCanhTac;
use App\Http\Requests\ChiTietNhatKyCanhTacRequest;
use Illuminate\Http\Request;

class ChiTietNhatKyCanhTacController extends Controller
{
    public function trangchu()
    {
        return view('admin.chitietnhatkycanhtac.chitietnhatkycanhtac_trangchu', ['dsChiTietNhatKyCanhTac' => ChiTietNhatKyCanhTac::all()]);
    }

    public function taomoi()
    {
        return view('admin.chitietnhatkycanhtac.chitietnhatkycanhtac_taomoi');
    }

    public function luu(ChiTietNhatKyCanhTacRequest $request)
    {
        try {
            $chiTietNhatKyCanhTac = new ChiTietNhatKyCanhTac();
			$chiTietNhatKyCanhTac->nhatkycanhtac_id = $request->nhatkycanhtac_id;
            $chiTietNhatKyCanhTac->vattu_id = $request->vattu_id;
			$chiTietNhatKyCanhTac->phuongtiensx_id = $request->phuongtiensx_id;
			$chiTietNhatKyCanhTac->tenvattuphuongtien = $request->tenvattuphuongtien;
			$chiTietNhatKyCanhTac->dongia = $request->dongia;
            $chiTietNhatKyCanhTac->soluong = $request->soluong;
			$chiTietNhatKyCanhTac->thongtin = $request->thongtin;
            $chiTietNhatKyCanhTac->save();
            return redirect()->route('admin.nhatkycanhtac_chitiet.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.chitietnhatkycanhtac.chitietnhatkycanhtac_chinhsua', ['chiTietNhatKyCanhTac' => ChiTietNhatKyCanhTac::findOrFail($id)]);
    }

    public function capnhat(ChiTietNhatKyCanhTacRequest $request)
    {
        $chiTietNhatKyCanhTac = ChiTietNhatKyCanhTac::findOrFail($request->id);
        try {
            $chiTietNhatKyCanhTac->nhatkycanhtac_id = $request->nhatkycanhtac_id;
            $chiTietNhatKyCanhTac->vattu_id = $request->vattu_id;
			$chiTietNhatKyCanhTac->phuongtiensx_id = $request->phuongtiensx_id;
			$chiTietNhatKyCanhTac->tenvattuphuongtien = $request->tenvattuphuongtien;
			$chiTietNhatKyCanhTac->dongia = $request->dongia;
            $chiTietNhatKyCanhTac->soluong = $request->soluong;
			$chiTietNhatKyCanhTac->thongtin = $request->thongtin;
            $chiTietNhatKyCanhTac->save();
            return redirect()->route('admin.nhatkycanhtac_chitiet.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            ChiTietNhatKyCanhTac::destroy($id);
            return redirect()->route('admin.nhatkycanhtac_chitiet.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
