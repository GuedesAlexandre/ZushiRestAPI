<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXXPy0sw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXXPy0sw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXXPy0sw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXXPy0sw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXXPy0sw\App_KernelDevDebugContainer([
    'container.build_hash' => 'XXPy0sw',
    'container.build_id' => '6502b51f',
    'container.build_time' => 1708707482,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXXPy0sw');