<?php

namespace ContainerVGIZR2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\adminApi\ApiUserController' shared autowired service.
     *
     * @return \App\Controller\API\adminApi\ApiUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/adminApi/ApiUserController.php';

        $container->services['App\\Controller\\API\\adminApi\\ApiUserController'] = $instance = new \App\Controller\API\adminApi\ApiUserController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\adminApi\\ApiUserController', $container));

        return $instance;
    }
}
