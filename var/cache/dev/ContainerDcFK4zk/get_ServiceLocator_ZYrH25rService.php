<?php

namespace ContainerDcFK4zk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZYrH25rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZYrH25r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZYrH25r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored.nwia602', NULL, 'Cannot determine controller argument for "App\\Controller\\QuizzController::userhistory()": the $user argument is type-hinted with the non-existent class or interface: "App\\Controller\\User". Did you forget to add a use statement?'],
        ], [
            'user' => '?',
        ]);
    }
}
