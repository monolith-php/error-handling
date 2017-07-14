<?php namespace Monolith\ErrorHandling;

use Throwable;

interface ExceptionHandler {
    public function handle(Throwable $error): void;
}