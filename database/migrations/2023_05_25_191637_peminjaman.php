<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id', 20);
            $table->date('tgl_pinjam')->default(DB::raw('CURRENT_TIMESTAMP'));
            //to admin
            $table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //to book
            $table->integer('book_id')->index()->unsigned();
            $table->foreign('book_id')->references('id')->on('buku')->onDelete('cascade');

            //to member
            $table->integer('member_id')->index()->unsigned();
            $table->foreign('member_id')->references('id')->on('anggota')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
