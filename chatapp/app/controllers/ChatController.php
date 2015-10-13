<?php

class ChatController extends \BaseController {
	protected $user;

	public function __construct()
	{
		if ( isset( Auth::user()->id )) {
			$this->user = User::find(Auth::user()->id);
		}
	}

	public function index()
	{
		return Redirect::to('/Chatties');
	}

	public function login()
	{
		return View::make('auth.login');
	}


	public function sendMessage() {

		$validator = Validator::make(Input::all(), Message::$rules);

		if ($validator->passes()) {
			$user = $this->user->nickname;

			$message = new Message;
			$message->body = Input::get('message');

			$message->from = Auth::user()->id;
			$message->to = Input::get('to');
			$message->channel = Input::get('channel');

			$message->save();

			if (Input::get('to')==0) {
				$channel = Channel::find(Input::get('channel'));
				$channel = $channel->name;

			}
			else {
				$user1 = User::find($this->user->id);
				$user2 = User::find(Input::get('to'));
				$channel = $this->getHash($user1,$user2);
			}


			$message = Input::get('message');
			$status = 'user';

			Pusherer::trigger($channel, 'message', array( 'message' => $message, 'user' => $user, 'status' => $status ));
			echo 'success';
		}

		else {
			$error=json_decode($validator->messages());
			echo  $error->message[0];
		}

	}


	public function showProfile($id) {
		$user = User::find($id);
		return View::make('chat.show-profile')->with('user',$user);
	}


	public function getHash($user1,$user2){
		if ($user1->id < $user2->id) {
			return $channel=md5($user1->nickname.'hash'.$user2->id);
		}
		else {
			return $channel=md5($user2->nickname.'hash'.$user1->id);
		}
	}



	public function showChannel($name)
	{
		$channel = Channel::where('name',$name)->first();
		$messages = Message::where('channel','=',$channel->id)->get();
		return View::make('chat.index')->with('channel',$channel)->with('messages',$messages);
	}
	public function showPrivate($name)
	{
		$user = User::where('nickname',$name)->first();
		$messages = Message::whereIn('from', array($user->id, $this->user->id))->whereIn('to', array($user->id, $this->user->id))->get();
		$hashedChannel = $this->getHash($user,$this->user);
		return View::make('chat.private')->with('user',$user)->with('messages',$messages)->with('hashedChannel',$hashedChannel);
	}

	public function create()
	{

	}


	public function store()
	{
		//
	}



	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}


}
