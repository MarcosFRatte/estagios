<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('numero_usp');       
            $table->string('valorbolsa');
            $table->string('tipobolsa');
            $table->string('duracao');            
            $table->text('justificativa');    
            $table->date('data_inicial');
            $table->date('data_final');
            $table->string('cargahoras'); 
            $table->string('cargaminutos');             
            $table->string('horario');
            $table->string('auxiliotransporte');
            $table->string('especifiquevt'); 
            $table->string('cnpj');            
            $table->text('atividades');
            $table->string('seguradora');
            $table->string('numseguro');  
            $table->text('controlehorario')->nullable();       
            $table->text('supervisao')->nullable();
            $table->text('interacao')->nullable();
            $table->text('enderecoedias')->nullable();

            /* Campos da rescição */
            $table->text('rescicao_motivo')->nullable();
            $table->date('rescicao_data')->nullable();

            /* Campos da renovação */
            $table->string('tipo')->default('novo'); // ou renovacao
            $table->text('renovacao_justificativa')->nullable();
            $table->bigInteger('renovacao_estagio_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagios');
    }
}
