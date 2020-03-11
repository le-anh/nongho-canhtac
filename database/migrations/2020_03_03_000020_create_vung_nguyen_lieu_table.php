<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVungNguyenLieuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vungnguyenlieu', function (Blueprint $table) {
			$table->id();
			$table->foreignId('nongsan_id')->constrained()->on('nongsan');
			$table->foreignId('hoptacxa_id')->constrained()->on('hoptacxa');
			$table->string('tenvungnguyenlieu', 191);
			$table->float('tongdientich')->nullable();
			$table->integer('tongsothua')->nullable();
			$table->integer('tongsothanhvien')->nullable();
			$table->text('vitri')->nullable();
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
		Schema::dropIfExists('vung_nguyen_lieus');
	}
}