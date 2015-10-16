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
            $table->string('accredit_category', 20);
            $table->string('name_franchise');
            $table->string('name_applicant');
            $table->string('designation');
            $table->string('gender');
            $table->string('mail');
            $table->string('phone', 20);
            $table->string('address');
            $table->string('photo');
            $table->string('attachment');
            $table->string('passport_nid', 19);
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