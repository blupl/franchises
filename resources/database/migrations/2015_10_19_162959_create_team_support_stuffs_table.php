<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSupportStuffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_support_stuffs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('franchise_id');
            $table->string('accredit_category', 20);
            $table->string('name_franchise');
            $table->string('name');
            $table->string('nationality');
            $table->string('personal_id', 19);
            $table->string('role');
            $table->string('date_of_birth');
            $table->string('permanent_address1');
            $table->string('permanent_address2');
            $table->string('permanent_district');
            $table->string('permanent_zip');
            $table->string('present_address1');
            $table->string('present_address2');
            $table->string('present_district');
            $table->string('present_zip');
            $table->string('mobile', 20);
            $table->string('email');
            $table->string('photo');
            $table->string('attachment');
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
		Schema::drop('team_support_stuffs');
	}

}
