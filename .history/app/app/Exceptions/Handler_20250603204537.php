<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return response()->view('error_page', [], 403);
        }

        return parent::render($request, $exception);
    }
}