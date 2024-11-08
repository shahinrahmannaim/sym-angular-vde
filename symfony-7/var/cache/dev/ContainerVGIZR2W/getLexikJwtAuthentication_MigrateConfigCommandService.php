<?php

namespace ContainerVGIZR2W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_MigrateConfigCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.migrate_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\MigrateConfigCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/BuildDebugContainerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/MigrateConfigCommand.php';

        $container->privates['lexik_jwt_authentication.migrate_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\MigrateConfigCommand(($container->services['lexik_jwt_authentication.key_loader'] ?? $container->load('getLexikJwtAuthentication_KeyLoaderService')), $container->getEnv('JWT_PASSPHRASE'), 'RS256');

        $instance->setName('lexik:jwt:migrate-config');
        $instance->setDescription('Migrate LexikJWTAuthenticationBundle configuration to the Web-Token one.');

        return $instance;
    }
}
