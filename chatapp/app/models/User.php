<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	public static $rules = array(
		'nickname'=>'required|alpha_num|between:3,12|unique:users',
		'firstname'=>'required|alpha|between:2,12',
		'lastname'=>'required|alpha|between:2,12',
		'email'=>'required|email|unique:users',
		'password'=>'required|alpha_num|between:6,12|confirmed',
		'password_confirmation'=>'required|alpha_num|between:6,12',
		'description'=>'required|max:1500'
	);

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function message()
	{
		return $this->hasOne('Message','id','from'); // links this->id to events.course_id
	}
}
