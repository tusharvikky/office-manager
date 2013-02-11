<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->string('f_name')->nullable();
			$table->string('l_name')->nullable();
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}