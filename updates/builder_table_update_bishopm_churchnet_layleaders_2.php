<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetLayleaders2 extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->integer('regional_id');
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->dropColumn('regional_id');
        });
    }
}
