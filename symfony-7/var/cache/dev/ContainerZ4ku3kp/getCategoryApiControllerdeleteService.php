<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryApiControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ybjbtEe.App\Controller\API\adminApi\CategoryApiController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ybjbtEe.App\\Controller\\API\\adminApi\\CategoryApiController::delete()'] = ($container->privates['.service_locator.ybjbtEe'] ?? $container->load('get_ServiceLocator_YbjbtEeService'))->withContext('App\\Controller\\API\\adminApi\\CategoryApiController::delete()', $container);
    }
}
