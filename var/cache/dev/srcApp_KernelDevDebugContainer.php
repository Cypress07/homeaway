<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUpxXeD7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUpxXeD7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUpxXeD7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUpxXeD7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUpxXeD7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UpxXeD7',
    'container.build_id' => '722d7f2c',
    'container.build_time' => 1588245153,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUpxXeD7');
