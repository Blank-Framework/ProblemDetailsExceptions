<?php

declare(strict_types=1);

namespace BlankFramework\ProblemDetailsExceptions;

use BlankFramework\WebExceptions\WebException;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProblemDetailsException extends WebException
{
    /**
     * @return array<string,string>
     */
    public function getProblemDetailsArray(): array
    {
        return [
            'type' => $this->getType(),
            'title' => $this->getTitle(),
            'detail' => $this->getDescription(),
        ];
    }
    /**
     * @return array<string,string>
     */
    public function getProblemDetailsHeaders(): array
    {
        return [
            'Content-Type' => 'application/problem+json',
        ];
    }

    public function getResponse(): JsonResponse
    {
        return new JsonResponse(
            $this->getProblemDetailsArray(),
            $this->getHttpStatusCode(),
            $this->getProblemDetailsHeaders(),
        );
    }
}
