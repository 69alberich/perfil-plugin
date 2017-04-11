<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlberichPerfilUsuarioTarjetas extends Migration
{
    public function up()
    {
        Schema::table('alberich_perfil_usuario_tarjetas', function($table)
        {
            $table->string('ultimos_digitos', 4);
        });
    }
    
    public function down()
    {
        Schema::table('alberich_perfil_usuario_tarjetas', function($table)
        {
            $table->dropColumn('ultimos_digitos');
        });
    }
}
