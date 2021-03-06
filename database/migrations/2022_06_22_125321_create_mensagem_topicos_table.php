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
        Schema::create('mensagem_topicos', function (Blueprint $table) {
            $table->id();
            $table->foreingId('mensagem_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreingId('topico_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['mensagem_id', 'topico_id']);
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
        Schema::dropIfExists('mensagem_topico');
    }
};
