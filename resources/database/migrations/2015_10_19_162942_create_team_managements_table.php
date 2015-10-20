<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamManagementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('franchise_team_managements', function(Blueprint $table)
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
            $table->string('country_of_birth');
            $table->string('mobile', 20);
            $table->string('passport_expiry');
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
		Schema::drop('team_managements');
	}

}
