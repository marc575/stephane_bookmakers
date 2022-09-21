<?php

namespace ContainerXIGxxGb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_ResultCachePoolService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('6bHgOGGQ2K', 0, ($container->targetDir.''.'/pools'), ($container->privates['cache.default_marshaller'] ?? ($container->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));

        return $instance;
    }
}
