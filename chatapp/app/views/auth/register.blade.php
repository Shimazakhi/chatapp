                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="register" class="modal fade">
                          <div class="modal-dialog">


		                       <div class="modal-content">

		                      <div class="modal-header">

		                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                      <h4 class="modal-title">Welcome to Chatties</h4>
		                      </div>

		                      <div class="modal-body">

                           <div class="row">
                          <div class="col-sm-11 col-sm-offset-1"><h2 class="form-register-heading">CHATTIES</h2></div>
                          </div>
                              @if(Session::has('error'))
                              <script type="text/javascript">
                                  $('#register').modal('show');
                              </script>
                              <div class="alert alert-danger">{{ Session::get('error') }}</div>
                              @endif

                               {{ HTML::ul($errors->all()) }}

                               {{ Form::open(array('url' => 'user', 'files' => true)) }}

                          <div class="row">
                          <div class="control-group">
                                {{ Form::label('nickname', 'Nickname', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::text('nickname', Input::old('nickname'), array('class' => 'form-control' ,'autocomplete' => 'off' , 'placeholder' => 'e.g. Jacky43', 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>

                          <div class="row">
                          <div class="control-group">
                                {{ Form::label('firstname', 'First Name', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control' ,'autocomplete' => 'off' , 'placeholder' => 'e.g. Jeremy', 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>
                          <div class="row">
                          <div class="control-group">
                                {{ Form::label('lastname', 'Last Name', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control' ,'autocomplete' => 'off' , 'placeholder' => 'e.g. White', 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>

                        <hr>

                         <div class="row">
                          <div class="control-group">
                                {{ Form::label('email', 'Email', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::text('email',Input::old('email'), array('class' => 'form-control' ,'autocomplete' => 'off' , 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>

                         <div class="row">
                          <div class="control-group">
                                {{ Form::label('password', 'Password', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::password('password', array('class' => 'form-control' ,'autocomplete' => 'off' , 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>

                         <div class="row">
                          <div class="control-group">
                                {{ Form::label('password_confirmation', 'Repeat', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::password('password_confirmation', array('class' => 'form-control' ,'autocomplete' => 'off' , 'required' => 'required')) }}
                                </div>
                         </div>
                         </div>


                         <hr>

                       <!--   <div class="row">
                         <div class="control-group">
                                {{ Form::label('userpic', 'User picture', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                {{ Form::file('userpic'); }}
                                 </div>
                         </div>
                         </div> -->

                        <div class="row">
                                  <div class="control-group">
                                    {{ Form::label('role', 'Register as admin?', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                     <div class="col-sm-7" >
                                     {{ Form::checkbox('role',1,null) }}
                                   </div>
                                  </div>
                        </div>



                        <div class="row">
                          <div class="control-group">
                                {{ Form::label('description', 'Short Story', array('class' => 'col-sm-3 col-sm-offset-1 control-label')) }}
                                <div class="col-sm-7" >
                                  {{ Form::textarea('description', Input::old('name'), array('class' => 'form-control', 'maxlength' => '1500')) }}
                                 </div>
                         </div>
                         </div>





		                      </div>

		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                                    {{ Form::submit('Register', array('class' => 'btn btn-theme')) }}
		                      </div>
                         {{ Form::close() }}




		                  </div>
		              </div>
		          </div>