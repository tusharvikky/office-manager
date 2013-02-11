<?php

class Create_Attend_Table {    

	public function up()
    {
		Schema::create('attend', function($table) {
			$table->increments('id');
			$table->integer('uid');
			$table->string('email');
			$table->string('date');
			$table->string('time_in');
			$table->string('time_out')->nullable();
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('attend');

    }

}