<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->bigInteger('notelp');
            $table->string('kategori');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->text('alamat');
            $table->text('keterangan')->nullable();
            $table->bigInteger('total_harga');
            $table->enum('status',['Paid','Unpaid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
