<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TQe_LeF.App\Controller\Admin\UserController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.TQe_LeF'] ?? $container->load('get_ServiceLocator_TQeLeFService'));

        if (isset($container->privates['.service_locator.TQe_LeF.App\\Controller\\Admin\\UserController::edit()'])) {
            return $container->privates['.service_locator.TQe_LeF.App\\Controller\\Admin\\UserController::edit()'];
        }

        return $container->privates['.service_locator.TQe_LeF.App\\Controller\\Admin\\UserController::edit()'] = $a->withContext('App\\Controller\\Admin\\UserController::edit()', $container);
    }
}
