<?php namespace Alberich\Perfil\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFieldMasterKey extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('master_key', 6)->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('master_key');
        });
    }
}
