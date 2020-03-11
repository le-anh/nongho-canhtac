<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuBaoSauBenhTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dubaosaubenh', function (Blueprint $table) {
			$table->id();
			$table->foreignId('saubenh_id')->constrained()->on('saubenh');
			$table->foreignId('vungnguyenlieu_id')->constrained()->on('vungnguyenlieu');
			$table->foreignId('muavu_id')->constrained()->on('muavu');
			$table->string('thongtindubao', 191);
			$table->string('nguoidubao', 50);
			$table->string('ghichu', 191)->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('du_bao_sau_benhs');
	}
}