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
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip',10)->nullable();
            $table->decimal('latitude',10,8)->nullable();
            $table->decimal('longitude',11,8)->nullable();
            $table->string('vicinity')->nullable();
            $table->integer('store_type_id')->unsigned();
            $table->integer('manager_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable()->index();
            $table->integer('state_id')->unsigned()->nullable()->index();
            $table->boolean('is_published');
            $table->timestamps();
        });

        Schema::table('fytinnovations_storemanagement_stores', function ($table) {
            $table->foreign('store_type_id','store_type_foreign')->references('id')->on('fytinnovations_storemanagement_store_types');
            $table->foreign('manager_id','manager_id_foreign')->references('id')->on('backend_users');
            $table->foreign('country_id','country_id_foreign')->references('id')->on('rainlab_location_countries');
            $table->foreign('state_id','state_id_foreign')->references('id')->on('rainlab_location_states');
        });
    }

    public function down()
    {
        Schema::table('fytinnovations_storemanagement_stores', function(Blueprint $table) {
            $table->dropForeign('store_type_foreign');
            $table->dropForeign('manager_id_foreign');
            $table->dropForeign('country_id_foreign');
            $table->dropForeign('state_id_foreign');
        });
        Schema::dropIfExists('fytinnovations_storemanagement_stores');
    }
}
