<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ClientException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class NotFoundException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'Requested resource could not be found',
    ) {
        parent::__construct(
            'Not Found',
            $message,
            'about:blank',
            404,
        );
    }
}
