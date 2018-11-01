<?php namespace Monolith\ErrorHandling;

use Monolith\ComponentBootstrapping\ComponentBootstrap;
use Monolith\DependencyInjection\Container;

final class ErrorHandlingBootstrap implements ComponentBootstrap
{
    public function bind(Container $container): void
    {
        if (getenv('SHOW_DEBUG_ERRORS') == 'on') {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }
    }

    public function init(Container $container): void
    {
    }
}
