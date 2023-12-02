# ProblemDetailsExceptions

The problem details exceptions package contains very simple classes for common HTTP exceptions. These are intended to allow
quick exits in applications while providing proper HTTP status code. You may also use this package to create your
own custom exceptions with the HTTP codes as the base.

This package is a continuation on the Blank Framework Web Exceptions package.

Additionally all exceptions should be Problem Details capable.

##  Included HTTP responses

- 400 - Bad Request
- 401 - Unauthorised
- 403 - Forbidden
- 404 - Not Found
- 405 - Method not allowed
- 406 - Not Acceptable
- 418 - I'm a teapot
- 422 - Unprocessable Entity
- 500 - Internal Server Error
- 501 - Not Implemented
- 502 - Bad Gateway
- 503 - Service Unavailable
- 504 - Gateway Timeout
