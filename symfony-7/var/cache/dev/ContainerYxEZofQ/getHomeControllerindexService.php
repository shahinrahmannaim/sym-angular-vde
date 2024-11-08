<?php

namespace ContainerYxEZofQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sZHI2DH.App\Controller\HomeController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sZHI2DH.App\\Controller\\HomeController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'repository' => 'App\\Repository\\RecipeRepository',
            'em' => '?',
            'hasher' => '?',
            'security' => '?',
        ]))->withContext('App\\Controller\\HomeController::index()', $container);
    }
}
