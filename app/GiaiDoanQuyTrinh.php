<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaiDoanQuyTrinh extends Model
{
	protected $table ='giaidoanquytrinh';
	public function QuyTrinh()
	{
		return $this->belongsTo('App\QuyTrinh', 'quytrinh_id');
	}
}