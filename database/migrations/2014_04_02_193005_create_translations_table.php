<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('ltm_translations')) {
            Schema::create('ltm_translations', function(Blueprint $table) {
    	        $table->collation = 'utf8mb4_bin';
                $table->bigIncrements('id');
                $table->integer('status')->default(0);
                $table->string('locale');
                $table->string('group');
                $table->text('key');
                $table->text('value')->nullable();
                $table->timestamps();
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('ltm_translations');
	}

}
