<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class NotAuthorisedException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Not authorised to access the requested resource',
    ) {
        parent::__construct(
            'Not Authorised',
            $message,
            'about:blank',
            401,
        );
    }
}
