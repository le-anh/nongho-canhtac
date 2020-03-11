<?php

namespace App\Http\Controllers;
use App\GiaiDoanQuyTrinh;
use App\Http\Requests\GiaiDoanQuyTrinhRequest;
use Illuminate\Http\Request;

class GiaiDoanQuyTrinhController extends Controller
{
    public function trangchu()
    {
        return view('admin.giaidoanquytrinh.giaidoanquytrinh_trangchu', ['dsGiaiDoanQuyTrinh' => GiaiDoanQuyTrinh::all()]);
    }

    public function taomoi()
    {
        return view('admin.giaidoanquytrinh.giaidoanquytrinh_taomoi');
    }

    public function luu(GiaiDoanQuyTrinhRequest $request)
    {
        try {
            $giaiDoanQuyTrinh = new GiaiDoanQuyTrinh();
			$giaiDoanQuyTrinh->quytrinh_id = $request->quytrinh_id;
            $giaiDoanQuyTrinh->tengiaidoan = $request->tengiaidoan;
			$giaiDoanQuyTrinh->huongdan = $request->huongdan;
			$giaiDoanQuyTrinh->phuongphap = $request->phuongphap;
            $giaiDoanQuyTrinh->save();
            return redirect()->route('admin.giaidoanquytrinh.trangchu')->with(['result' => True, 'message' => "Lưu thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function chinhsua($id)
    {
        return view('admin.giaidoanquytrinh.giaidoanquytrinh_chinhsua', ['giaiDoanQuyTrinh' => GiaiDoanQuyTrinh::findOrFail($id)]);
    }

    public function capnhat(GiaiDoanQuyTrinhRequest $request)
    {
        $giaiDoanQuyTrinh = GiaiDoanQuyTrinh::findOrFail($request->id);
        try {
            $giaiDoanQuyTrinh = new GiaiDoanQuyTrinh();
			$giaiDoanQuyTrinh->quytrinh_id = $request->quytrinh_id;
            $giaiDoanQuyTrinh->tengiaidoan = $request->tengiaidoan;
			$giaiDoanQuyTrinh->huongdan = $request->huongdan;
			$giaiDoanQuyTrinh->phuongphap = $request->phuongphap;
            $giaiDoanQuyTrinh->save();
            return redirect()->route('admin.giaidoanquytrinh.trangchu')->with(['result' => True, 'message' => "Cập nhật thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }

    public function xoa($id)
    {
        try {
            GiaiDoanQuyTrinh::destroy($id);
            return redirect()->route('admin.giaidoanquytrinh.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
        }
    }
}
