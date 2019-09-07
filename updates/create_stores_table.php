<?php namespace Fytinnovations\StoreManagement\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('fytinnovations_storemanagement_stores', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('email');
            $table->string('phone');
            $table->integer('store_type_id');
            $table->timestamps();
        });

        Schema::table('fytinnovations_storemanagement_stores', function ($table) {
            $table->foreign('store_type_id','store_type_foreign')->references('id')->on('fytinnovations_storemanagement_store_types');
        });
    }

    public function down()
    {
        // Schema::table('fytinnovations_storemanagement_stores', function(Blueprint $table) {
        //     $table->dropForeign('store_type_foreign');
        // });
        Schema::dropIfExists('fytinnovations_storemanagement_stores');
    }
}
