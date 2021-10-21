<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetLayleaders extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->dropColumn('role');
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->string('role', 255)->nullable();
            $table->string('status', 255)->nullable();
        });
    }
}
