<?php

namespace ContainerYxEZofQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_ObjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.object' shared service.
     *
     * @return \ApiPlatform\State\ObjectProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ObjectProvider.php';

        return $container->privates['api_platform.state_provider.object'] = new \ApiPlatform\State\ObjectProvider();
    }
}
