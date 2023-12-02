<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class NotAcceptableException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Unacceptable response',
    ) {
        parent::__construct(
            'Not Acceptable',
            $message,
            'about:blank',
            406
        );
    }
}
