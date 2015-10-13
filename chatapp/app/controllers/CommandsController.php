<?php
	class CommandsController extends BaseController {
		protected $commands;
		protected $channel;

		public function __construct()
		{
			$this->commands = array('help','time','channel','topic');

			if(Auth::user()->role<1) {
			$this->commands = array('help','time');
			}

			if (Input::get( 'channel' ) != 0) {
				$this->channel = Channel::find( Input::get( 'channel' ) );
				$this->channel = $this->channel->name;
			}

		}

		public function anyRouting() {
				if (Input::get( 'channel' ) == 0) {
				  return $this->error('Unable to use commands in private chat');
				}


				$command = substr(Input::get('message'), 1);
				$command = explode(' ',$command,2);
                if(!isset($command[1])){
	                $command[1] = null;
                }
				foreach ($this->commands as $cmd)  {
					if ($cmd == $command[0]) {
					return $this->{$command[0]}($command[1]);
					}
				}
				return $this->error('Unknown command');
		}

		public function error($message) {
			echo $message;
			return ' ';
		}

		public function help() {
			$list=implode(" , /",$this->commands);
			echo 'Available commands for you: /'.$list;
		}

		public function time() {
			echo 'Current server time is :' .date('l jS \of F Y h:i:s A');
		}

		public function channel($channelName) {

			$channel = new Channel();
			$channel->name = $channelName;
			$channel->topic = 'Channel where u can discuss '.$channelName;
			$createdChannelName = $channelName;
			$channel->save();

			$channel =  Channel::find(Input::get('channel'));
			$channelName = $channel->name;
			$status = 'user';
			Pusherer::trigger($channelName,'channels-update', array('status' => $status));

			echo 'Channel '. $createdChannelName .' successfully created.';
		}

		public function topic($topic) {
			$channel = Channel::find(Input::get('channel'));
			$channel->topic = $topic;
			$channel->save();
			$status = 'user';
			Pusherer::trigger($this->channel,'topic-update', array('status' => $status));
			echo 'Topic successfully changed.';
		}

		public function getIndex()
		{
			//
		}

		public function postProfile()
		{
			//
		}

		public function anyLogin()
		{
			//
		}

	}