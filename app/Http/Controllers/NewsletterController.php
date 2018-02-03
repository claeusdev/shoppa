<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter\Contracts\NewsletterContract;

class NewsletterController extends Controller
{
	protected $newsletter;
    //
	public function __construct(NewsletterContract $newsletter)
	{
		$this->newsletter = $newsletter;
	}

	public function create(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
		]);

		$this->newsletter->subscribe(
				config('services.mailchimp.list'), 
				$request->email);

		return redirect()->back();
	}
}
