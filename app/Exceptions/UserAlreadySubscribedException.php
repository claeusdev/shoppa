<?php

namespace App\Exceptions;

use Exception;

class UserAlreadySubscribedException extends Exception
{
    protected $message = "You're already subscribed to our list";
}
