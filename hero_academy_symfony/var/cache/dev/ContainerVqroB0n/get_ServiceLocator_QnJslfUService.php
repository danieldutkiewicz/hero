<?php

namespace ContainerVqroB0n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QnJslfUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QnJslfU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QnJslfU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hero' => ['privates', '.errored..service_locator.QnJslfU.App\\Entity\\Hero', NULL, 'Cannot autowire service ".service_locator.QnJslfU": it references class "App\\Entity\\Hero" but no such service exists.'],
        ], [
            'hero' => 'App\\Entity\\Hero',
        ]);
    }
}
