<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE96cjSB\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE96cjSB/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerE96cjSB.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerE96cjSB\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerE96cjSB\App_KernelProdContainer([
    'container.build_hash' => 'E96cjSB',
    'container.build_id' => '5988b165',
    'container.build_time' => 1660177573,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE96cjSB');
