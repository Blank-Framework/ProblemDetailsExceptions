<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

/**
 * This class or exception is only included for a bit of fun. Use at your own discretion
 */
class TeapotException extends ProblemDetailsException
{
    public function __construct()
    {
        parent::__construct(
            'I\'m a teapot',
            'I\'m a teapot',
            'about:blank',
            418,
        );
    }
}
