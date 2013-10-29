<?php

namespace Cards\Infrastructure\StdLib\Exceptions;

class RankException extends \Exception
{
    const RANK_ERROR_BASE = 200;

    public function __construct($message, $code)
    {
        $code = self::RANK_ERROR_BASE + intval($code);
        parent::__construct($message, $code);
    }
}
