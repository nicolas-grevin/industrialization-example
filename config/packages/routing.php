<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
    $container->extension('framework', [
        'router' => [],
    ]);

    if ('prod' === $container->env()) {
        $container->extension('framework', [
            'router' => [
                'strict_requirements' => null,
            ],
        ]);
    }
};
