<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Verifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sistem_pengajuan_id')->constrained();
            $table->string('namaPengaju');
            $table->string('namaVerifikasi');
            $table->string('imageVerifikasi');
            $table->text('coment')->default('');
            $table->tinyInteger('approve')->default(0);
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
        Schema::dropIfExists('verifikasis');
    }
}
