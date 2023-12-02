<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ServerException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class InternalServerException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'An internal server error has occurred',
    ) {
        parent::__construct(
            'Internal Server Error',
            $message,
            'about:blank',
        );
    }
}
