<?php

namespace App\Http\Controllers;

use App\Queue;
use Illuminate\Http\Request;

class BloodDonationController extends Controller
{
	public function currentNumber()
	{
		if ($queue = Queue::first() == null) {
			Queue::create([
				'number' => 1
			]);
		}
		$queue = Queue::first();
		return response()->json([
			'number' => $queue->number
		], 200);
	}

	public function increaseNumber()
	{
		$queue = Queue::first();
		$queue->update([
			'number' => $queue->number + 1
		]);
		return response()->json([
			'message' => 'queue number increased',
			'number' => $queue->fresh()->number
		], 201);
	}

	public function resetNumber()
	{
		if (Queue::first() == null) {
			Queue::create([
				'number' => 1
			]);
		}else{
			Queue::first()->update([
				'number' => 1
			]);
		}
		return response()->json([
			'message' => 'reset successful'
		], 200);
	}
}
