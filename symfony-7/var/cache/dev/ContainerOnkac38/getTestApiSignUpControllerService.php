<?php

namespace ContainerOnkac38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestApiSignUpControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\TestApiSignUpController' shared autowired service.
     *
     * @return \App\Controller\API\TestApiSignUpController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/TestApiSignUpController.php';

        $container->services['App\\Controller\\API\\TestApiSignUpController'] = $instance = new \App\Controller\API\TestApiSignUpController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\TestApiSignUpController', $container));

        return $instance;
    }
}
