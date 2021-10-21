<?php namespace Bishopm\Churchnet\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateBishopmChurchnetLayleaders2 extends Migration
{
    public function up()
    {
        Schema::create('bishopm_churchnet_layleaders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('firstname', 255);
            $table->string('surname', 255);
            $table->string('phone', 255);
            $table->integer('local_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bishopm_churchnet_layleaders');
    }
}
