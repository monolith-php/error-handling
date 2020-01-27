<?php namespace Monolith\ErrorHandling;

use Monolith\Configuration\Config;
use Monolith\ComponentBootstrapping\ComponentBootstrap;
use Monolith\DependencyInjection\Container;

final class ErrorHandlingBootstrap implements ComponentBootstrap
{
    public function bind(Container $container): void
    {
        /** @var Config $config */
        $config = $container(Config::class);
        if ($config->get('SHOW_DEBUG_ERRORS') == 'on') {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }
    }

    public function init(Container $container): void
    {
    }
}
