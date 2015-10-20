<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseManagementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('franchise_management', function(Blueprint $table)
		{
			$table->increments('id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('franchise_id');
            $table->string('accredit_category', 20);
            $table->string('name_franchise');
            $table->string('name');
            $table->string('designation');
            $table->string('gender');
            $table->string('email');
            $table->string('mobile', 20);
            $table->string('address1', 100);
            $table->string('address2', 100)->nullable();
            $table->string('city', 25);
            $table->string('zip', 10);
            $table->string('photo');
            $table->string('attachment');
            $table->string('personal_id');
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