<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAho2x3D\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAho2x3D/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAho2x3D.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAho2x3D\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerAho2x3D\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Aho2x3D',
    'container.build_id' => '21bf0cb6',
    'container.build_time' => 1534236014,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAho2x3D');
