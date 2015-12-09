<?php
namespace App\Album\Action;

use App\Album\Service\AlbumServiceInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\RedirectResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Stdlib\Parameters;

class DeleteAction
{
    /**
     * @var AlbumServiceInterface
     */
    protected $albumService;

    /**
     * @var Router\RouterInterface
     */
    protected $router;

    /**
     * @var null|Template\TemplateRendererInterface
     */
    private $template;

    /**
     * @param Router\RouterInterface                  $router
     * @param Template\TemplateRendererInterface|null $template
     * @param AlbumServiceInterface                   $albumService
     */
    public function __construct(
        Router\RouterInterface $router,
        Template\TemplateRendererInterface $template = null,
        AlbumServiceInterface $albumService
    ) {
        $this->router = $router;
        $this->template = $template;
        $this->albumService = $albumService;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     *
     * @return HtmlResponse|RedirectResponse
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        try {
            $album = (array) $this->albumService->getAlbum($request->getAttribute('id'));
        } catch (\Exception $e) {
            return new HtmlResponse(
                $this->template->render('error::404'), 404
            );
        }

        if ($request->getMethod() === 'POST') {
            $body = new Parameters($request->getParsedBody());

            $del = $body->get('del', 'No');

            if (strtolower($del) === 'yes') {
                $this->albumService->deleteAlbum($album);
            }

            return new RedirectResponse($this->router->generateUri('album.index'));
        }

        return new HtmlResponse($this->template->render('album::delete', ['album' => $album]));
    }
}
