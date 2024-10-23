<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiSignupControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\ApiSignupController' shared autowired service.
     *
     * @return \App\Controller\API\ApiSignupController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/ApiSignupController.php';

        $container->services['App\\Controller\\API\\ApiSignupController'] = $instance = new \App\Controller\API\ApiSignupController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\ApiSignupController', $container));

        return $instance;
    }
}
