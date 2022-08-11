<?php

namespace ContainerE96cjSB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OH36RVdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.OH36RVd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OH36RVd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'post' => ['privates', '.errored..service_locator.OH36RVd.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.OH36RVd": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
