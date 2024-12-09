<?php

namespace ContainerOnkac38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailConfirmationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\EmailConfirmationController' shared autowired service.
     *
     * @return \App\Controller\API\EmailConfirmationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/EmailConfirmationController.php';

        $container->services['App\\Controller\\API\\EmailConfirmationController'] = $instance = new \App\Controller\API\EmailConfirmationController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\EmailConfirmationController', $container));

        return $instance;
    }
}
