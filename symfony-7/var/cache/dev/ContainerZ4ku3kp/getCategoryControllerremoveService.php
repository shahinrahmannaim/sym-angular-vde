<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerremoveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dsbOFwy.App\Controller\Admin\CategoryController::remove()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dsbOFwy.App\\Controller\\Admin\\CategoryController::remove()'] = ($container->privates['.service_locator.dsbOFwy'] ?? $container->load('get_ServiceLocator_DsbOFwyService'))->withContext('App\\Controller\\Admin\\CategoryController::remove()', $container);
    }
}
