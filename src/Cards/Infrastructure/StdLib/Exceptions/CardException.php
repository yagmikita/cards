<?php

namespace Cards\Infrastructure\StdLib\Exceptions;

class CardException extends \Exception
{
    const CARD_ERROR_BASE = 100;

    public function __construct($message, $code)
    {
        $code = self::CARD_ERROR_BASE + intval($code);
        parent::__construct($message, $code);
    }
}
