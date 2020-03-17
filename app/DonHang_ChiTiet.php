<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang_ChiTiet extends Model
{
	protected $table = 'donhang_chitiet';

	public function donhang()
	{
		return $this->belongsTo('App\DonHang', 'donhang_id');
	}
	public function vattu()
	{
		return $this->belongsTo('App\VatTu', 'vattu_id');
	} 
}