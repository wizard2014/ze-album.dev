<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            // form
            App\Album\Form\AlbumForm::class => App\Album\Form\AlbumForm::class,
        ],
        'factories' => [
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,

            // db
            'db'                                => App\Db\Factory\DoctrineDbalConnectionFactory::class,

            App\Album\Action\IndexAction::class  => App\Album\Factory\Action\IndexActionFactory::class,
            App\Album\Action\AddAction::class    => App\Album\Factory\Action\AddActionFactory::class,
            App\Album\Action\EditAction::class   => App\Album\Factory\Action\EditActionFactory::class,
            App\Album\Action\DeleteAction::class => App\Album\Factory\Action\DeleteActionFactory::class,

            App\Album\Repository\AlbumRepositoryInterface::class => App\Album\Factory\Repository\AlbumRepositoryFactory::class,
            App\Album\Service\AlbumServiceInterface::class       => App\Album\Factory\Service\AlbumServiceFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'album.index',
            'path'            => '/album',
            'middleware'      => App\Album\Action\IndexAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'album.add',
            'path'            => '/album/add',
            'middleware'      => App\Album\Action\AddAction::class,
            'allowed_methods' => ['GET', 'POST'],
        ],
        [
            'name'            => 'album.edit',
            'path'            => '/album/edit/{id:\d+}',
            'middleware'      => App\Album\Action\EditAction::class,
            'allowed_methods' => ['GET', 'POST'],
        ],
        [
            'name'            => 'album.delete',
            'path'            => '/album/delete/{id:\d+}',
            'middleware'      => App\Album\Action\DeleteAction::class,
            'allowed_methods' => ['GET', 'POST'],
        ],
    ],
];
