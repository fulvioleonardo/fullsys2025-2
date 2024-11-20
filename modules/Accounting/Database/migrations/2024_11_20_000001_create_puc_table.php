<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePucTable extends Migration
{
    public function up()
    {
        Schema::create('puc', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Código del PUC
            $table->string('name'); // Nombre de la cuenta contable
            $table->enum('type', ['activo', 'pasivo', 'patrimonio', 'ingreso', 'gasto']); // Tipo de cuenta
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('puc');
    }
}
