<?php

namespace App\Album\Factory\Action;

use App\Album\Action\AddAction;
use App\Album\Service\AlbumServiceInterface;
use App\Album\Form\AlbumForm;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class AddActionFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return AddAction
     */
    public function __invoke(ContainerInterface $container)
    {
        $router = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        $albumService = $container->get(AlbumServiceInterface::class);

        $form = $container->get(AlbumForm::class);

        return new AddAction($router, $template, $albumService, $form);
    }
}
