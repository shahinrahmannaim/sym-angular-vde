<?php

namespace ContainerYxEZofQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zXOlprV.App\Controller\Admin\UserController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zXOlprV.App\\Controller\\Admin\\UserController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\UserRepository',
        ]))->withContext('App\\Controller\\Admin\\UserController::index()', $container);
    }
}
