@extends('login')

@section('content')
	  <div id="login-page">
	  	<div class="container">
          {{ Form::open(array('url' => 'sessions', 'files' => true, 'class' => 'form-login')) }}
		        <h2 class="form-login-heading">CHATTIES</h2>
		        <div class="login-wrap">


                   {{ Form::text('email', null, array('class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Email', 'required' => 'required' )) }}
		            <br>
                   {{ Form::password('password', array('class' => 'form-control',  'autocomplete' => 'off', 'placeholder' => 'Passord', 'required' => 'required')) }}
                   <br>  <br>

		            {{ Form::submit('Login', array('class' => 'btn btn-theme btn-block')) }}

                {{ Form::close() }}


		            <hr>

		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="{{URL::to('login')}}#register" data-toggle="modal">
		                    Create an account
		                </a>
		            </div>

		              <div class="text-center">
                          @if(Session::has('message'))
                              <p class="alert">{{ Session::get('message') }}</p>
                          @endif
                      </div>


		        </div


	  	</div>
	  </div>


@include('auth.register')



@endsection