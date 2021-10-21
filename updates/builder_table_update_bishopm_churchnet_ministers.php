<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetMinisters extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_ministers', function($table)
        {
            $table->boolean('active')->default(true);
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_ministers', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
