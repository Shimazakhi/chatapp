<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateChannelsTable extends Migration {

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('channels', function(Blueprint $table)
			{
				$table->increments('id');
				$table->string('name','100')->unique();
				$table->string('topic')->nullable();
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
			Schema::table('channels', function(Blueprint $table)
			{
				Schema::drop('Channels');
			});
		}

	}
