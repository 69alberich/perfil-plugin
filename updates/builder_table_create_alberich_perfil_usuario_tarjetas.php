<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlberichPerfilUsuarioTarjetas extends Migration
{
    public function up()
    {
        Schema::create('alberich_perfil_usuario_tarjetas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('codigo');
            $table->integer('status_id');
            $table->integer('usuario_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alberich_perfil_usuario_tarjetas');
    }
}
