<?php

namespace ContainerBD2IGAN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KmfN8_VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KmfN8.V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KmfN8.V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'recipe' => ['privates', '.errored..service_locator.KmfN8.V.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator.KmfN8.V": it needs an instance of "App\\Entity\\Recipe" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'recipe' => 'App\\Entity\\Recipe',
            'em' => '?',
        ]);
    }
}
