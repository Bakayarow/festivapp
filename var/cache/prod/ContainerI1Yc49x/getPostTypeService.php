<?php

namespace ContainerI1Yc49x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PostType' shared autowired service.
     *
     * @return \App\Form\PostType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PostType'] = new \App\Form\PostType();
    }
}
