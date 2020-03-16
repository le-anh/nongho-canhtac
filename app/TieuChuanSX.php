<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class TieuChuanSX extends Model
{
	protected $table ='tieuchuansx';
	public function LoaiTieuChuanSX()
	{
		return $this->belongsTo('App\LoaiTieuChuanSX', 'loaitieuchuansx_id');
	}
}