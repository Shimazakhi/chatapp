<?php

    class UsersController extends \BaseController
    {
        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */
        public function store()
        {

            $validator = Validator::make(Input::all(), User::$rules);

            if ($validator->passes()) {

                $user = new User;
                $user->nickname = Input::get('nickname');
                $user->firstname = Input::get('firstname');
                $user->lastname = Input::get('lastname');
                $user->password = Hash::make(Input::get('password'));
                $user->email = Input::get('email');
                $user->role = Input::get('role');
                $user->description = Input::get('description');
                $user->save();

                return Redirect::to('login')->with('message', 'Your account is successfully registered!');
            } else {
                return Redirect::back()->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
            }
        }
    }
