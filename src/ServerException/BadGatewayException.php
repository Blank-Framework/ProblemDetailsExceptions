<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ServerException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class BadGatewayException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Could not relay request to upstream server',
    ) {
        parent::__construct(
            'Bad Gateway',
            $message,
            'about:blank',
            502
        );
    }
}
