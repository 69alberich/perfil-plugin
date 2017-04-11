<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlberichPerfilTipoUsuario extends Migration
{
    public function up()
    {
        Schema::table('alberich_perfil_tipo_usuario', function($table)
        {
            $table->string('titulo', 150);
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('alberich_perfil_tipo_usuario', function($table)
        {
            $table->dropColumn('titulo');
            $table->integer('id')->change();
        });
    }
}
