<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetRegionals3 extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->decimal('latitude', 20, 10)->nullable();
            $table->decimal('longitude', 20, 10)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
}
