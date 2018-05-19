<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatearticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                
        Schema::create('articles', function($table) {
            $table->increments('id')->unsigned();
            $table->string('title', 128);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->text('intro_text');
            $table->text('full_text');
            $table->enum('allow_comment', array('no', 'yes'))->default('yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('articles', function($table) {
            $table->dropForeign('articles_categories_id_foreign');
            $table->dropForeign('articles_users_id_foreign');
        });

         
        Schema::dropIfExists('articles');
    }
}
