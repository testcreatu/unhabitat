<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
class SubscriptionController extends Controller
{
	public function viewSubscriptions()
	{
		$subscriptions = Subscription::orderBy('id','desc')->get();
		return view('cd-admin.subscriptions.view-subscriptions',compact('subscriptions'));
	}
}
