<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('franchises', function(Blueprint $table)
		{
			$table->increments('id');
            $table->tinyInteger('user_id');
            $table->string('accredit_category', 20);
            $table->string('name_franchise');
            $table->string('name');
            $table->string('designation');
            $table->string('gender');
            $table->string('mail');
            $table->string('mobile', 20);
            $table->string('address1', 100);
            $table->string('address2', 100);
            $table->string('city', 25);
            $table->string('zip', 10);
            $table->string('photo');
            $table->string('attachment');
            $table->string('personal_id', 19);
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
		Schema::drop('franchises');
	}

}