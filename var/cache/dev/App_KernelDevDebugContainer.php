<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNXEWlCv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNXEWlCv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNXEWlCv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNXEWlCv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNXEWlCv\App_KernelDevDebugContainer([
    'container.build_hash' => 'NXEWlCv',
    'container.build_id' => '091e8701',
    'container.build_time' => 1659807793,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNXEWlCv');
