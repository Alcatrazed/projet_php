<?php

namespace ContainerH9EPHPZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllermodifprofileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q60ydOj.App\Controller\AdminController::modifprofile()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q60ydOj.App\\Controller\\AdminController::modifprofile()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'user' => ['privates', '.errored..service_locator.q60ydOj.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.q60ydOj": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\User',
        ]))->withContext('App\\Controller\\AdminController::modifprofile()', $container);
    }
}
