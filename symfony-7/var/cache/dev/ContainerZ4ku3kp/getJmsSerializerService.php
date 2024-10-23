<?php

namespace ContainerZ4ku3kp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        $a = ($container->privates['jms_serializer.traceable_metadata_factory'] ?? self::getJmsSerializer_TraceableMetadataFactoryService($container));
        $b = ($container->privates['jms_serializer.traceable_handler_registry'] ?? self::getJmsSerializer_TraceableHandlerRegistryService($container));
        $c = ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService'));

        $d = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($c);
        $e = ($container->privates['jms_serializer.event_dispatcher'] ?? self::getJmsSerializer_EventDispatcherService($container));
        $f = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $f->setOptions(1216);
        $g = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $g->setFormatOutput(true);
        $h = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory(false);
        $h->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? self::getDoctrineService($container)), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $d, $e, $c), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $d, $e, $c)], ['json' => $f, 'xml' => $g], ['json' => $h, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()), ($container->services['jms_serializer.deserialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()), ($container->privates['jms_serializer.type_parser'] ??= new \JMS\Serializer\Type\Parser()));
    }
}
