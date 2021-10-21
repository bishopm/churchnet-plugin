<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetMinisters extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_ministers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('surname', 255);
            $table->string('firstname', 255);
            $table->integer('regional_id');
            $table->string('status', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_ministers');
    }
}
