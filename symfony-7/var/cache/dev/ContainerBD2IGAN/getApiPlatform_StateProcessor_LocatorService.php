<?php

namespace ContainerBD2IGAN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_LocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.locator' shared service.
     *
     * @return \ApiPlatform\State\CallableProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/CallableProcessor.php';

        return $container->privates['api_platform.state_processor.locator'] = new \ApiPlatform\State\CallableProcessor(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'api_platform.swagger_ui.processor' => ['privates', 'api_platform.swagger_ui.processor', 'getApiPlatform_SwaggerUi_ProcessorService', true],
            'api_platform.doctrine.orm.state.remove_processor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => ['privates', 'api_platform.doctrine.orm.state.remove_processor', 'getApiPlatform_Doctrine_Orm_State_RemoveProcessorService', true],
            'api_platform.doctrine.orm.state.persist_processor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => ['privates', 'api_platform.doctrine.orm.state.persist_processor', 'getApiPlatform_Doctrine_Orm_State_PersistProcessorService', true],
            'ApiPlatform\\Symfony\\Messenger\\Processor' => ['privates', 'ApiPlatform\\Symfony\\Messenger\\Processor', 'getProcessorService', true],
        ], [
            'api_platform.swagger_ui.processor' => 'ApiPlatform\\Symfony\\Bundle\\SwaggerUi\\SwaggerUiProcessor',
            'api_platform.doctrine.orm.state.remove_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
            'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\RemoveProcessor',
            'api_platform.doctrine.orm.state.persist_processor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor' => 'ApiPlatform\\Doctrine\\Common\\State\\PersistProcessor',
            'ApiPlatform\\Symfony\\Messenger\\Processor' => 'ApiPlatform\\Symfony\\Messenger\\Processor',
        ]));
    }
}
