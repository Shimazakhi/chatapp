
@extends('template')

@section('content')

     <section id="main-content">
          <section class="wrapper" >

          	<h3><i class="fa fa-user"></i> {{$user->nickname}}</h3>
          	<h4>Profile details</h4>

          	<div class="row mt text-left  msgContainer">

            <div class="col-md-1"> <img src="{{ URL::to('assets/img/ui-zac.jpg"' )}}"> </div>
            <div class="col-md-5">
            <div class="col-md-5">
            <ul>
            <li>Name: {{$user->firstname}} </li>
            <li>Surname: {{$user->lastname}} </li>
            <li>Email: {{$user->email}} </li>
            </ul>
            </div>


            </div>
          	</div>


		</section>
      </section>


@endsection