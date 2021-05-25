<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_producer');
            $table->unsignedInteger('id_loai');
            $table->unsignedInteger('day');
            $table->string('ma');
            $table->string('name_product');
            $table->text('content');
            $table->integer('price');
            $table->integer('discount');
            $table->text('image');
            $table->text('image_list');
            $table->integer('view');
            $table->string('gioi_tinh');
            $table->string('size_mat_so');
            $table->string('dang_mat_so');
            $table->string('loai_kinh');
            $table->string('bao_hanh');
            $table->string('chong_nuoc');
            $table->string('xuat_xu');
            $table->string('trang_thai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
