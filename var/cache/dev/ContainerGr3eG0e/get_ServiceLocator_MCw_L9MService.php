<?php

namespace ContainerGr3eG0e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MCw_L9MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MCw.l9M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MCw.l9M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'news' => ['privates', '.errored..service_locator.MCw.l9M.App\\Entity\\News', NULL, 'Cannot autowire service ".service_locator.MCw.l9M": it references class "App\\Entity\\News" but no such service exists.'],
        ], [
            'news' => 'App\\Entity\\News',
        ]);
    }
}
