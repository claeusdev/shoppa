<?php 

namespace App\Services\Newsletter;

use App\Services\Newsletter\Contracts\NewsletterContract;
use Mailchimp;


class MailChimpNewsletter implements NewsletterContract
{
	protected $client;

	public function __construct(Mailchimp $client)
	{
		$this->client = $client;
	}

	public function subscribe($listId, $email, $mergeVars = [])
	{
		$this->client->lists->subscribe($listId, ['email' => $email], $mergeVars);
	}
}