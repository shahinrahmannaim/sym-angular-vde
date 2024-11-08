<?php

namespace ContainerVGIZR2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminDashboardController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\AdminDashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminDashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/AdminDashboardController.php';

        $container->services['App\\Controller\\Admin\\AdminDashboardController'] = $instance = new \App\Controller\Admin\AdminDashboardController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Admin\\AdminDashboardController', $container));

        return $instance;
    }
}
