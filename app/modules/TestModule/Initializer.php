<?php

namespace TestModule;

use Adminka\Core\InjectableAware;
use Adminka\Core\Module\ModuleInitializerInterface;
use Dez\Config\Config;

class Initializer extends InjectableAware implements ModuleInitializerInterface {

    public function initialize()
    {
        $this->config->merge(Config::factory([]));

        $this->loader->registerNamespaces([
            __NAMESPACE__ . '\\Controllers' => __DIR__ . '/controllers'
        ])->register();

        $this->router->add('/shopper', [
            'namespace' => __NAMESPACE__ . '\\Controllers'
        ]);

        $this->router->add('/shopper/:action', [
            'namespace' => __NAMESPACE__ . '\\Controllers'
        ]);

        $this->router->add('/shopper/:controller/:action', [
            'namespace' => __NAMESPACE__ . '\\Controllers'
        ]);

        $this->router->add('/shopper/:controller/:action/:id', [
            'namespace' => __NAMESPACE__ . '\\Controllers'
        ]);

        $this->router->add('/shopper/:id', [
            'namespace' => __NAMESPACE__ . '\\Controllers',
            'controller' => 'product',
            'action' => 'item',
        ]);

        $this->view->addDirectory('max_shop', __DIR__ . '/templates');
    }

}

return new Initializer();