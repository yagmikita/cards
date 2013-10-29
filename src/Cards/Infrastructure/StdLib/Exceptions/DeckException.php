<?php

namespace Cards\Infrastructure\StdLib\Exceptions;

class DeckException extends \Exception
{
    const DECK_ERROR_BASE = 400;

    public function __construct($message, $code)
    {
        $code = self::DECK_ERROR_BASE + intval($code);
        parent::__construct($message, $code);
    }
}
