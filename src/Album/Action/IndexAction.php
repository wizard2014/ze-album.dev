<?php

namespace App\Album\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use App\Album\Service\AlbumServiceInterface;

class IndexAction
{
    /**
     * @var Template\TemplateRendererInterface
     */
    private $template;

    /**
     * @var AlbumServiceInterface
     */
    protected $albumService;

    /**
     * @param Template\TemplateRendererInterface|null $template
     * @param AlbumServiceInterface                   $albumService
     */
    public function __construct(
        Template\TemplateRendererInterface $template = null,
        AlbumServiceInterface $albumService
    ) {
        $this->template     = $template;
        $this->albumService = $albumService;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     *
     * @return HtmlResponse
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        // album list
        $albums = $this->albumService->getAlbums();

        return new HtmlResponse(
            $this->template->render('album::index', ['albums' => $albums])
        );
    }
}
