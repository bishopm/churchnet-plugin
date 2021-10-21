<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetMinisters2 extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_ministers', function($table)
        {
            $table->string('role', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_ministers', function($table)
        {
            $table->dropColumn('role');
        });
    }
}
