<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giong;
use App\Http\Requests\GiongRequest;

class GiongController extends Controller
{
    public function trangchu()
    {
        return view('admin.giong_trangchu', ['dsGiong' => Giong::all()]);
    }

    public function taomoi()
    {
        return view('admin.giong_taomoi');
    }

    public function luu(GiongRequest $request)
    {
        try {
            $giong = new Giong();
            $giong->id = $request->id;
            $giong->tengiong = $request->tengiong;
            $giong->dactinh = $request->dactinh;
            $giong->mausac = $request->mausac;
            $giong->mota = $request->mota;
            $giong->save();
            return redirect()->route('admin.giong.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {

            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.giong_chinhsua', ['giong' => Giong::findOrFail($id)]);
    }

    public function capnhat(GiongRequest $request)
    {
        $giong = Giong::findOrFail($request->id);
        try {
            $giong->id = $request->id;

            $giong->tengiong = $request->tengiong;
            $giong->dactinh = $request->dactinh;
            $giong->mausac = $request->mausac;
            $giong->mota = $request->mota;
            $giong->save();
            return redirect()->route('admin.giong.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
        
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            Giong::destroy($id);
            return redirect()->route('admin.giong.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
