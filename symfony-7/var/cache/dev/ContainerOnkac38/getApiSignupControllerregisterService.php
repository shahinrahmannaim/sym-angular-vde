<?php

namespace ContainerOnkac38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiSignupControllerregisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.__CzQUd.App\Controller\API\ApiSignupController::register()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.__CzQUd'] ?? $container->load('get_ServiceLocator_CzQUdService'));

        if (isset($container->privates['.service_locator.__CzQUd.App\\Controller\\API\\ApiSignupController::register()'])) {
            return $container->privates['.service_locator.__CzQUd.App\\Controller\\API\\ApiSignupController::register()'];
        }

        return $container->privates['.service_locator.__CzQUd.App\\Controller\\API\\ApiSignupController::register()'] = $a->withContext('App\\Controller\\API\\ApiSignupController::register()', $container);
    }
}
