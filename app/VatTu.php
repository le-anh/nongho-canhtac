<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class VatTu extends Model
{
	protected $table = 'vattu';

	public function loaivattu()
	{
		return $this->belongsTo('App\LoaiVatTu', 'loaivattu_id');
	}
	public function hoptacxa()
	{
		return $this->belongsTo('App\HopTacXa', 'hoptacxa_id');
	}
}