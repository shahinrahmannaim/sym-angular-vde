<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVGIZR2W\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVGIZR2W/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVGIZR2W.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVGIZR2W\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVGIZR2W\App_KernelDevDebugContainer([
    'container.build_hash' => 'VGIZR2W',
    'container.build_id' => 'a2af3933',
    'container.build_time' => 1731053688,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVGIZR2W');
