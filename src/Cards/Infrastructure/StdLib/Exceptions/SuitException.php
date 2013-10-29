<?php

namespace Cards\Infrastructure\StdLib\Exceptions;

class SuitException extends \Exception
{
    const SUIT_ERROR_BASE = 200;

    public function __construct($message, $code)
    {
        $code = self::SUIT_ERROR_BASE + intval($code);
        parent::__construct($message, $code);
    }
}
