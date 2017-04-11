<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlberichPerfilStatusTarjetas extends Migration
{
    public function up()
    {
        Schema::create('alberich_perfil_status_tarjetas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('status', 150);
            $table->text('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alberich_perfil_status_tarjetas');
    }
}
