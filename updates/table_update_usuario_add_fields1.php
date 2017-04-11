<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFieldTipoUsuario extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->integer('tipo_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('tipo_id');
        });
    }
}
