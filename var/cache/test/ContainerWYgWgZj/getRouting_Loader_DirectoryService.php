<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_DirectoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}