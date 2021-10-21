<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetDenominations extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_denominations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('denomination');
            $table->string('slug');
            $table->string('abbreviation');
            $table->string('national')->nullable();
            $table->string('provincial')->nullable();
            $table->string('regional')->nullable();
            $table->string('local')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_denominations');
    }
}
