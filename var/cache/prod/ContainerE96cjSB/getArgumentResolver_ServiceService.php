<?php

namespace ContainerE96cjSB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommentController::delete' => ['privates', '.service_locator.KBkob.L', 'get_ServiceLocator_KBkob_LService', true],
            'App\\Controller\\CommentController::edit' => ['privates', '.service_locator.KBkob.L', 'get_ServiceLocator_KBkob_LService', true],
            'App\\Controller\\CommentController::index' => ['privates', '.service_locator.VXcOMBY', 'get_ServiceLocator_VXcOMBYService', true],
            'App\\Controller\\CommentController::new' => ['privates', '.service_locator.vCnrsYt', 'get_ServiceLocator_VCnrsYtService', true],
            'App\\Controller\\CommentController::show' => ['privates', '.service_locator.PK5KVtZ', 'get_ServiceLocator_PK5KVtZService', true],
            'App\\Controller\\MyPostController::index' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController::delete' => ['privates', '.service_locator.JQ.Ubn6', 'get_ServiceLocator_JQ_Ubn6Service', true],
            'App\\Controller\\PostController::edit' => ['privates', '.service_locator.JQ.Ubn6', 'get_ServiceLocator_JQ_Ubn6Service', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.dbbjmJE', 'get_ServiceLocator_DbbjmJEService', true],
            'App\\Controller\\PostController::new' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.OH36RVd', 'get_ServiceLocator_OH36RVdService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CommentController:delete' => ['privates', '.service_locator.KBkob.L', 'get_ServiceLocator_KBkob_LService', true],
            'App\\Controller\\CommentController:edit' => ['privates', '.service_locator.KBkob.L', 'get_ServiceLocator_KBkob_LService', true],
            'App\\Controller\\CommentController:index' => ['privates', '.service_locator.VXcOMBY', 'get_ServiceLocator_VXcOMBYService', true],
            'App\\Controller\\CommentController:new' => ['privates', '.service_locator.vCnrsYt', 'get_ServiceLocator_VCnrsYtService', true],
            'App\\Controller\\CommentController:show' => ['privates', '.service_locator.PK5KVtZ', 'get_ServiceLocator_PK5KVtZService', true],
            'App\\Controller\\MyPostController:index' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController:delete' => ['privates', '.service_locator.JQ.Ubn6', 'get_ServiceLocator_JQ_Ubn6Service', true],
            'App\\Controller\\PostController:edit' => ['privates', '.service_locator.JQ.Ubn6', 'get_ServiceLocator_JQ_Ubn6Service', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.dbbjmJE', 'get_ServiceLocator_DbbjmJEService', true],
            'App\\Controller\\PostController:new' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.OH36RVd', 'get_ServiceLocator_OH36RVdService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CommentController::delete' => '?',
            'App\\Controller\\CommentController::edit' => '?',
            'App\\Controller\\CommentController::index' => '?',
            'App\\Controller\\CommentController::new' => '?',
            'App\\Controller\\CommentController::show' => '?',
            'App\\Controller\\MyPostController::index' => '?',
            'App\\Controller\\PostController::delete' => '?',
            'App\\Controller\\PostController::edit' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::new' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CommentController:delete' => '?',
            'App\\Controller\\CommentController:edit' => '?',
            'App\\Controller\\CommentController:index' => '?',
            'App\\Controller\\CommentController:new' => '?',
            'App\\Controller\\CommentController:show' => '?',
            'App\\Controller\\MyPostController:index' => '?',
            'App\\Controller\\PostController:delete' => '?',
            'App\\Controller\\PostController:edit' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:new' => '?',
            'App\\Controller\\PostController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
