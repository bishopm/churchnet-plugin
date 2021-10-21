<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetTags extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('tag', 255);
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_tags');
    }
}
