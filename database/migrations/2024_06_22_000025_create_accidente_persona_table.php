<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentePersonaTable extends Migration
{
    public function up()
    {
        Schema::create('accidente_persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accidente_id')->constrained()->onDelete('cascade');
            $table->foreignId('persona_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accidente_persona');
    }
}

