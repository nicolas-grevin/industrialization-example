<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
    $container->extension('doctrine_migrations', [
        'migrations_paths' => [
            'DoctrineMigrations' => '%kernel.project_dir%/migrations',
        ],
        'enable_profiler' => false,
    ]);
};
