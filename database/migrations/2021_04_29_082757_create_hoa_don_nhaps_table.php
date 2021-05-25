<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonNhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_import', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_NV');
            $table->integer('total');
            // $table->string('payment');
            $table->text('note');
            $table->string('trang_thai');
            $table->date('date_order');
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
        Schema::dropIfExists('bill_import');
    }
}
