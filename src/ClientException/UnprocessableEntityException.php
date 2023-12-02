<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class UnprocessableEntityException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Invalid request sent to the server',
    ) {
        parent::__construct(
            'Unprocessable Entity',
            $message,
            'about:blank',
            422,
        );
    }
}
