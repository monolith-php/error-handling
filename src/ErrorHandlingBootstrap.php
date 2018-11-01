<?php namespace Monolith\ErrorHandling;

use Monolith\ComponentBootstrapping\ComponentBootstrap;
use Monolith\DependencyInjection\Container;

final class ErrorHandlingBootstrap implements ComponentBootstrap
{
    /** @var bool */
    private $debug;

    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }

    public function bind(Container $container): void
    {
        if ($this->debug) {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }
    }

    public function init(Container $container): void
    {
    }
}
