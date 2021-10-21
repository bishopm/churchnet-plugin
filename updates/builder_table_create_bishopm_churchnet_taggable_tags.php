<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetTaggableTags extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_taggable_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('taggable_id');
            $table->integer('tag_id');
            $table->string('taggable_type', 191);
            $table->primary(['taggable_id','tag_id','taggable_type'],'taggable_tags_key');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_taggable_tags');
    }
}
