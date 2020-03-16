<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
	protected $table = 'donhang';

	public function nguoidung()
	{
		return $this->belongsTo('App\NguoiDung', 'nguoidung_id');
	}
}