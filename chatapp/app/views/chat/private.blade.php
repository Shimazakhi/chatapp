@extends('template')

@section('content')

            <section id="main-content">
            <section class="wrapper">
            <div id="hide"><span id="channel-name">{{ $hashedChannel }}</span></div>
          	<h3><i class="fa fa-comments"></i> {{$user->nickname}}</h3>
          	<div class="row mt msgContainer"  id="message-block">
          	@foreach($messages as $key => $message)
          	<p> <span> ({{ $message->created_at }}) {{ $message->user->nickname }}:</span> {{ $message->body }}</p>
          	@endforeach
          	</div>
            </section>

            <form role="form" id="message-form">
            <div class="InputPanel">
            <input class="form-control" id="send" name="message" type="text" placeholder="Write your text here" >
            {{ Form::hidden('channel', 0) }}
            {{ Form::hidden('to', $user->id) }}
            </div>
            </form>
            </section>

      @include('assets.pusher')
@endsection