<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetLocals extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_locals', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('local', 255);
            $table->string('slug', 255);
            $table->string('address', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->decimal('latitude', 20, 10)->nullable();
            $table->decimal('longitude', 20, 10)->nullable();
            $table->integer('regional_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_locals');
    }
}
