<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
        $table->id();
        $table->string('titulo',150);
        $table->string('imagem',150);
        $table->string('Descrição',3000);
        $table->enum('Bugs', ['Visual', 'Sonoro','Físico', 'Glitch','Financeiro']);
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
        Schema::dropIfExists('formularios');
    }
}
