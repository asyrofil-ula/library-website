<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_members');
            $table->unsignedBigInteger('id_books');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->timestamps();

            $table->foreign('id_members')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('id_books')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjamen');
    }
};
