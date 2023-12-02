<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions\ServerException;

use BlankFramework\ProblemDetailsExceptions\ProblemDetailsException;

class NotImplementedException extends ProblemDetailsException
{
    public function __construct(
        string $message = 'The requested resource is not implemented',
    ) {
        parent::__construct(
            'Not Implemented',
            $message,
            'about:blank',
            501,
        );
    }
}
