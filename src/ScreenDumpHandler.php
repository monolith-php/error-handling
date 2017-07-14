<?php namespace Monolith\ErrorHandling;

use Throwable;

class ScreenDumpHandler implements ExceptionHandler {
    public function handle(Throwable $error): void {
        echo '<h1>Uncaught Error</h1>';
        d($error);
    }
}