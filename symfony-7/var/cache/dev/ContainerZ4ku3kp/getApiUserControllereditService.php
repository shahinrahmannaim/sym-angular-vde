<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiUserControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.__CzQUd.App\Controller\API\adminApi\ApiUserController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.__CzQUd.App\\Controller\\API\\adminApi\\ApiUserController::edit()'] = ($container->privates['.service_locator.__CzQUd'] ?? $container->load('get_ServiceLocator_CzQUdService'))->withContext('App\\Controller\\API\\adminApi\\ApiUserController::edit()', $container);
    }
}
