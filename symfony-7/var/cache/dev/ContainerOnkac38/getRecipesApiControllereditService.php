<?php

namespace ContainerOnkac38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipesApiControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yxa1ZOH.App\Controller\API\RecipesApiController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yxa1ZOH.App\\Controller\\API\\RecipesApiController::edit()'] = ($container->privates['.service_locator.yxa1ZOH'] ?? $container->load('get_ServiceLocator_Yxa1ZOHService'))->withContext('App\\Controller\\API\\RecipesApiController::edit()', $container);
    }
}
