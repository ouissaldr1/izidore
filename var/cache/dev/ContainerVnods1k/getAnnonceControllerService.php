<?php

namespace ContainerVnods1k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnonceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AnnonceController' shared autowired service.
     *
     * @return \App\Controller\AnnonceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AnnonceController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'AverageCalculator.php';

        $container->services['App\\Controller\\AnnonceController'] = $instance = new \App\Controller\AnnonceController(($container->privates['App\\Service\\AverageCalculator'] ?? ($container->privates['App\\Service\\AverageCalculator'] = new \App\Service\AverageCalculator())));

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\AnnonceController', $container));

        return $instance;
    }
}
