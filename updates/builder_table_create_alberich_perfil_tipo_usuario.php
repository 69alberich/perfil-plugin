<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlberichPerfilTipoUsuario extends Migration
{
    public function up()
    {
        Schema::create('alberich_perfil_tipo_usuario', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('descripcion', 255);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alberich_perfil_tipo_usuario');
    }
}
