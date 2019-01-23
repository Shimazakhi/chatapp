<?php

    /**
     * Class Channel
     */
    class Channel extends Eloquent {

        /**
         * Has Many Messages
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function message()
		{
			return $this->hasMany('App\Message');
		}

	}
