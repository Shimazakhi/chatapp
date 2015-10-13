@extends('template')

@section('content')

            <section id="main-content">
            <section class="wrapper">
          	<h3><i class="fa fa-comments"></i> <span id="channel-name">{{ $channel->name }}</span></h3>
          	<h4 id="topic">{{ $channel->topic }}</h4>
          	<div class="row mt msgContainer"  id="message-block">
          	@foreach($messages as $key => $message)
          	<p> <span> ({{ $message->created_at }}) {{ $message->user->nickname }}:</span> {{ $message->body }}</p>
          	@endforeach
          	</div>
            </section>

            <form role="form" id="message-form">
            <div class="InputPanel">
            <input class="form-control" id="send" name="message" type="text" placeholder="Write your text here" >
            {{ Form::hidden('channel', $channel->id) }}
            {{ Form::hidden('to', 0) }}
            </div>
            </form>
            </section>

      @include('assets.pusher')
@endsection