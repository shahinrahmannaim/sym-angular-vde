<?php

namespace ContainerVGIZR2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryApiControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ybjbtEe.App\Controller\API\adminApi\CategoryApiController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.ybjbtEe'] ?? $container->load('get_ServiceLocator_YbjbtEeService'));

        if (isset($container->privates['.service_locator.ybjbtEe.App\\Controller\\API\\adminApi\\CategoryApiController::edit()'])) {
            return $container->privates['.service_locator.ybjbtEe.App\\Controller\\API\\adminApi\\CategoryApiController::edit()'];
        }

        return $container->privates['.service_locator.ybjbtEe.App\\Controller\\API\\adminApi\\CategoryApiController::edit()'] = $a->withContext('App\\Controller\\API\\adminApi\\CategoryApiController::edit()', $container);
    }
}
