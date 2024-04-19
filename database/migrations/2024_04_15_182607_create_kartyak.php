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
        Schema::create('kartyak', function (Blueprint $table) {
            $table->id();
            $table->string('Kártyanév');
            $table->string('Kártyakép');
            $table->integer('Ár');
            

            $table->timestamps();

        });
    }

    
};
