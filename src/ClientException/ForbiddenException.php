<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class ForbiddenException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Access to the requested resource has been forbidden',
    ) {
        parent::__construct(
            'Forbidden',
            $message,
            'about:blank',
            403
        );
    }
}
