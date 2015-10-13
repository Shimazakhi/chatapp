<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateMessagesTable extends Migration {

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('Messages', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('body','400');
				$table->boolean('from');
				$table->boolean('to');
				$table->boolean('channel');
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
			Schema::table('Messages', function(Blueprint $table)
			{
				Schema::drop('Messages');
			});
		}

	}
