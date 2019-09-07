<?php namespace Fytinnovations\StoreManagement\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStoreTypesTable extends Migration
{
    public function up()
    {
        Schema::create('fytinnovations_storemanagement_store_types', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->boolean('is_published')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fytinnovations_storemanagement_store_types');
    }
}
