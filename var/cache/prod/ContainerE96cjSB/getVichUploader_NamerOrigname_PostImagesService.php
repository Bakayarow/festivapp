<?php

namespace ContainerE96cjSB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_NamerOrigname_PostImagesService extends App_KernelProdContainer
{
    /*
     * Gets the public 'vich_uploader.namer_origname.post_images' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['vich_uploader.namer_origname.post_images'] = new \Vich\UploaderBundle\Naming\OrignameNamer(($container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $container->load('getTransliteratorService')));
    }
}
