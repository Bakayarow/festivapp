<?php

namespace ContainerE96cjSB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSmartUniqueNamerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Vich\UploaderBundle\Naming\SmartUniqueNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SmartUniqueNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Vich\\UploaderBundle\\Naming\\SmartUniqueNamer'] = new \Vich\UploaderBundle\Naming\SmartUniqueNamer(($container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $container->load('getTransliteratorService')));
    }
}
