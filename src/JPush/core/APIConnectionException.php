<?php

namespace JPush\Core;

use Exception;

/**
 * JPush Exception
 * User: xiezefan
 * Date: 15/12/18
 * Time: 下午3:14.
 */
class APIConnectionException extends Exception
{
    public $isResponseTimeout;

    public function __construct($message, $isResponseTimeout = false)
    {
        parent::__construct($message);
        $this->isResponseTimeout = $isResponseTimeout;
    }
}
