<?php

namespace ContainerBD2IGAN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tye6hqXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tye6hqX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tye6hqX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\RecipeRepository',
        ]);
    }
}
