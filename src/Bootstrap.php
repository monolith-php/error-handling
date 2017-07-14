<?php namespace Monolith\ErrorHandling;

use Monolith\DependencyInjection\{Container, ComponentBootstrap};

class Bootstrap implements ComponentBootstrap {
    public function bind(Container $c): void {
        $c->bind(ScreenDumpHandler::class);
    }

    public function start(Container $c): void {
        error_reporting(E_ALL);
        set_exception_handler([$c[ScreenDumpHandler::class], 'handle']);
    }
}