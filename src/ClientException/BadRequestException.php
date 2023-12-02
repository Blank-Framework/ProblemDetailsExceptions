<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class BadRequestException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Bad request to the server',
    ) {
        parent::__construct(
            'Bad Request',
            $message,
            'about:blank',
            400,
        );
    }
}
