<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiGiong;
use App\Http\Requests\LoaiGiongRequest;

class LoaiGiongController extends Controller
{
    public function trangchu()
    {
        return view('admin.loaigiong_trangchu', ['dsLoaiGiong' => LoaiGiong::all()]);
    }

    public function taomoi()
    {
        return view('admin.loaigiong_taomoi');
    }

    public function luu(LoaiGiongRequest $request)
    {
        try {
            $loaiGiong = new LoaiGiong();
            $loaiGiong->tenloaigiong = $request->tenloaigiong;
            $loaiGiong->mota = $request->mota;
            $loaiGiong->save();
            return redirect()->route('admin.loaigiong.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.loaigiong_chinhsua', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
    }

    public function capnhat(LoaiGiongRequest $request)
    {
        $loaiGiong = LoaiGiong::findOrFail($request->id);
        try {
            $loaiGiong->tenloaigiong = $request->tenloaigiong;
            $loaiGiong->mota = $request->mota;
            $loaiGiong->save();
            return redirect()->route('admin.loaigiong.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            LoaiGiong::destroy($id);
            return redirect()->route('admin.loaigiong.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
