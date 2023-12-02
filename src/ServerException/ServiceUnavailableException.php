<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ServerException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class ServiceUnavailableException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Service currently unavailable',
    ) {
        parent::__construct(
            'Service Unavailable',
            $message,
            'about:blank',
            503
        );
    }
}
