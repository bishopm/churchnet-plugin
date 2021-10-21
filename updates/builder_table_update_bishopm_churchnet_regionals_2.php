<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetRegionals2 extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->integer('plan_month')->default(1);
            $table->string('contact', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->dropColumn('plan_month');
            $table->dropColumn('contact');
        });
    }
}
