<?php

	class Message extends Eloquent {

		public function user()
		{
			return $this->belongsTo('User','from','id');
		}

		public function getCreatedAtAttribute($date)
		{
			return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
		}

		public function getUpdatedAtAttribute($date)
		{
			return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
		}

		public static $rules = array(
			'message'=>'required|between:1,400',
		);



		
	}