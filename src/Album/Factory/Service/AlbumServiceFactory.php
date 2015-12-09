<?php

namespace App\Album\Factory\Service;

use App\Album\Form\AlbumForm;
use App\Album\Repository\AlbumRepositoryInterface;
use App\Album\Service\AlbumService;
use Interop\Container\ContainerInterface;

class AlbumServiceFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return AlbumService
     */
    public function __invoke(ContainerInterface $container)
    {
        $albumRepository = $container->get(AlbumRepositoryInterface::class);
        $form = $container->get(AlbumForm::class);

        return new AlbumService($albumRepository, $form);
    }
}
