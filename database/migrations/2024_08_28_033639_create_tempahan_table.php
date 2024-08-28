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
        Schema::create('tempahan', function (Blueprint $table) {
            $table->id(); // create column ID jenis bigInteger dengan AUTO INCREMENT dan PRIMARY KEY

            $table->string('jenis_kenderaan', 30)->nullable(); // varchar dengan limit characters 30
            $table->string('no_kenderaan', 20)->nullable(); // varchar dengan limit characters 20
            $table->string('nama_pemandu')->nullable(); // varchar dengan maksimum limit characters
            $table->date('tarikh_tempahan')->nullable();
            $table->date('tarikh_mula')->nullable();
            $table->date('tarikh_akhir')->nullable();
            $table->text('tujuan');
            $table->text('alamat_destinasi');
            $table->string('status', 100)->default('pending');
            
            $table->timestamps(); // created_at dan updated_at - timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempahan');
    }
};
