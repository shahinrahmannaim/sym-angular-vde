<?php

namespace ContainerOnkac38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipesApiControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4m4tlH4.App\Controller\API\RecipesApiController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4m4tlH4.App\\Controller\\API\\RecipesApiController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'recipe' => ['privates', '.errored..service_locator.4m4tlH4.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator.4m4tlH4": it needs an instance of "App\\Entity\\Recipe" but this type has been excluded in "config/services.yaml".'],
            'repository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'recipe' => 'App\\Entity\\Recipe',
            'repository' => 'App\\Repository\\RecipeRepository',
            'em' => '?',
        ]))->withContext('App\\Controller\\API\\RecipesApiController::delete()', $container);
    }
}
