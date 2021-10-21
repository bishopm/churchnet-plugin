<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetLayleaders3 extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->string('phone', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_layleaders', function($table)
        {
            $table->string('phone', 255)->nullable(false)->change();
        });
    }
}
