<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAZkUKXB\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAZkUKXB/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerAZkUKXB.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerAZkUKXB\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerAZkUKXB\appAppKernelProdContainer([
    'container.build_hash' => 'AZkUKXB',
    'container.build_id' => 'cdbf9516',
    'container.build_time' => 1720375965,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAZkUKXB');
