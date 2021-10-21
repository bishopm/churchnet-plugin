<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateBishopmChurchnetRegionals extends Migration
{
    public function up()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->string('regional', 255)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('slug', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('bishopm_churchnet_regionals', function($table)
        {
            $table->text('regional')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('slug')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
