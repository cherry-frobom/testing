<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;


class ChatsController extends Controller
{
	/**
	 * Show chats
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('chats.chat');
	}

	/**
	 * Fetch all messages
	 *
	 * @return Message
	 */
	public function fetchMessages()
	{
		return Message::with('user')->get();
	}

	/**
	 * Persist message to database
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function sendMessage(Request $request)
	{
		$user = Sentinel::check();

		$message = $user->messages()->create([
		    'message' => $request->input('message')
		]);

		  broadcast(new MessageSent($user, $message))->toOthers();

		  return ['status' => 'Message Sent!'];
	}
}
