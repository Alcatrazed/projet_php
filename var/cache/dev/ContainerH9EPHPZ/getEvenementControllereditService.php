<?php

namespace ContainerH9EPHPZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sMofYe0.App\Controller\EvenementController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sMofYe0.App\\Controller\\EvenementController::edit()'] = ($container->privates['.service_locator.sMofYe0'] ?? $container->load('get_ServiceLocator_SMofYe0Service'))->withContext('App\\Controller\\EvenementController::edit()', $container);
    }
}
