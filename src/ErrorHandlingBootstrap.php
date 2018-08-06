<?php namespace Monolith\ErrorHandling;

use Monolith\ComponentLoading\ComponentBootstrap;
use Monolith\DependencyInjection\Container;

class ErrorHandlingBootstrap implements ComponentBootstrap {
    public function bind(Container $container): void {
        $container->bind(ScreenDumpHandler::class);
    }

    public function init(Container $container): void {
        error_reporting(E_ALL);
        set_exception_handler([$container[ScreenDumpHandler::class], 'handle']);
        set_error_handler([$container[ScreenDumpHandler::class], 'handle']);
    }
}
