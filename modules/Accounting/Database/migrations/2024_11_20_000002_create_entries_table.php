<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('description'); // Descripción del asiento contable
            $table->timestamps();
        });

        Schema::create('entry_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained('entries')->onDelete('cascade');
            $table->foreignId('puc_id')->constrained('puc')->onDelete('cascade'); // Relación con el PUC
            $table->decimal('debit', 15, 2)->default(0); // Débito
            $table->decimal('credit', 15, 2)->default(0); // Crédito
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entry_details');
        Schema::dropIfExists('entries');
    }
}
