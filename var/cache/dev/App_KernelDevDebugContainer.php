<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGr3eG0e\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGr3eG0e/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGr3eG0e.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGr3eG0e\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGr3eG0e\App_KernelDevDebugContainer([
    'container.build_hash' => 'Gr3eG0e',
    'container.build_id' => 'c0263312',
    'container.build_time' => 1670176214,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGr3eG0e');
