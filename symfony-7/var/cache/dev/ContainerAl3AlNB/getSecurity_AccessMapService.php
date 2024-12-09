<?php

namespace ContainerAl3AlNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api/register')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([($container->privates['.security.request_matcher..tvo6Vp'] ??= new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api/login'))]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/profile')]), ['ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/admin')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api/admin')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([($container->privates['.security.request_matcher.3qgJVJN'] ??= new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api'))]), ['IS_AUTHENTICATED_FULLY'], NULL);

        return $instance;
    }
}
