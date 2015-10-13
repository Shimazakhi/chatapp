<?php

	class Channel extends Eloquent {

		public function message()
		{
			return $this->hasOne('App\Message');
		}

	}