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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('company_id');// foreign key); 
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->bigInteger('nip');
            $table->string('foto');
            $table->enum('status', ['hadir', 'alpha', 'izin', 'sakit', 'cuti', 'tidak hadir']);
            $table->timestamps();
        });

        // Schema::create('company', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama_company');
        //     $table->string('csip');
        //     $table->string('pekerjaan');
        //     $table->timestamps();
        // });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
    
};
