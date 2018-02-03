<?php 

namespace App\Services\Newsletter;

use App\Services\Newsletter\Contracts\NewsletterContract;
use Mailchimp;
use Mailchimp_List_AlreadySubscribed;
use App\Exceptions\UserAlreadySubscribedException;


class MailChimpNewsletter implements NewsletterContract
{
	protected $client;

	public function __construct(Mailchimp $client)
	{
		$this->client = $client;
	}

	public function subscribe($listId, $email, $mergeVars = [])
	{
		try {
			$this->client->lists->subscribe($listId, ['email' => $email], $mergeVars); 
		} catch (Mailchimp_List_AlreadySubscribed $e) {
			
			throw new UserAlreadySubscribedException;
			
		}
		
	}
}