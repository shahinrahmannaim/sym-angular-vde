<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Routing/ApiLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AttributeRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AttributeDirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DirectoryAwareLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/Psr4DirectoryLoader.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->services['routing.loader'])) {
            return $container->services['routing.loader'];
        }
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();

        $c = ($container->services['kernel'] ?? $container->get('kernel', 1));

        $d = new \Symfony\Component\HttpKernel\Config\FileLocator($c);
        $e = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('dev');

        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($d, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($d, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($d, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($d, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($d, 'dev'));
        $b->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'dev'));
        $b->addLoader(new \ApiPlatform\Symfony\Routing\ApiLoader($c, ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), $a, $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], false, true, true, false, false, NULL));
        $b->addLoader($e);
        $b->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($d, $e));
        $b->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($d, $e));
        $b->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($d));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($b, ['utf8' => true], []);
    }
}
