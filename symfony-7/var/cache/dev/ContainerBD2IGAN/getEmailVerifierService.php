<?php

namespace ContainerBD2IGAN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailVerifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\EmailVerifier' shared autowired service.
     *
     * @return \App\Security\EmailVerifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Security/EmailVerifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UriSigner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Factory/UriSignerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Util/VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Generator/VerifyEmailTokenGenerator.php';

        return $container->privates['App\\Security\\EmailVerifier'] = new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? self::getRouterService($container)), (new \SymfonyCasts\Bundle\VerifyEmail\Factory\UriSignerFactory($container->getEnv('APP_SECRET'), 'signature'))->createUriSigner(), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
