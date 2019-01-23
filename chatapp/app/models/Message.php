<?php

	class Message extends Eloquent {

        /**
         * belongs to User
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user()
		{
			return $this->belongsTo('User','from','id');
		}

        public function channel()
        {
            return $this->belongsTo(Channel::class);
		}

        /**
         * Created At Formatted
         *
         * @param $date
         * @return string
         */
        public function getCreatedAtAttribute($date)
		{
			return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
		}

        /**
         * Updated at Formatteds
         *
         * @param $date
         * @return string
         */
        public function getUpdatedAtAttribute($date)
		{
			return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
		}

        /**
         * Rules
         *
         * @var array
         */
        public static $rules = array(
			'message'=>'required|between:1,400',
		);




	}
