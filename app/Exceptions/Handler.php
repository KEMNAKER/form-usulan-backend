<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, $exception)
    {
        if (! $request->wantsJson() or $exception instanceof ValidationException) {
            return parent::render($request, $exception);
        }

        // if the request wants JSON + exception is not ValidationException
        $response['message'] = $exception->getMessage();

        // verify the app is in debug mode
        if (config('app.debug')) {
            // Add the exception class name, message and stack trace to response
            $response['exception'] = get_class($exception); // Reflection might be better here
            $response['trace'] = $exception->getTrace();
        }

        // default response of 400
        $status = 400;

        // if this exception is an instance of AuthenticationException
        if ($exception instanceof AuthenticationException) {
            // set the status code
            $status = 401;
        }

        // if this exception is an instance of HttpException
        if ($this->isHttpException($exception)) {
            // grab the HTTP status code from the Exception
            $status = $exception->getStatusCode();
        }

        // return a JSON response with the response array and status code
        return response()->json($response, $status);
    }
}
