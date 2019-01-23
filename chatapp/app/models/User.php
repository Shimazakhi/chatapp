<?php

    use Illuminate\Auth\UserTrait;
    use Illuminate\Auth\UserInterface;
    use Illuminate\Auth\Reminders\RemindableTrait;
    use Illuminate\Auth\Reminders\RemindableInterface;

    /**
     * Class User
     */
    class User extends Eloquent implements UserInterface, RemindableInterface
    {

        use UserTrait, RemindableTrait;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';

        /**
         * Hidden
         *
         * @var array
         */
        protected $hidden = array('password', 'remember_token');

        /**
         * Validation rules
         *
         * @var array
         */
        public static $rules = array(
            'nickname'              => 'required|alpha_num|between:3,12|unique:users',
            'firstname'             => 'required|alpha|between:2,12',
            'lastname'              => 'required|alpha|between:2,12',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'required|alpha_num|between:6,12',
            'description'           => 'required|max:1500'
        );

        /**
         * Remember Token
         *
         * @return mixed|string
         */
        public function getRememberToken()
        {
            return $this->remember_token;
        }

        /**
         * Set Remember Token
         *
         * @param string $value
         */
        public function setRememberToken($value)
        {
            $this->remember_token = $value;
        }

        /**
         * @return string
         */
        public function getRememberTokenName()
        {
            return 'remember_token';
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function message()
        {
            return $this->hasMany(Message::class, 'id', 'from');
        }
    }
