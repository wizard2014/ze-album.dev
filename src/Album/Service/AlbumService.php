<?php

namespace App\Album\Service;

use App\Album\Entity\Album;
use App\Album\Form\AlbumForm;
use App\Album\Repository\AlbumRepositoryInterface;

class AlbumService implements AlbumServiceInterface
{
    protected $repository;
    protected $form;

    public function __construct(
        AlbumRepositoryInterface $repository,
        AlbumForm $form
    ) {
        $this->repository = $repository;
        $this->form       = $form;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlbums()
    {
        return $this->repository->fetchAll();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlbum($id)
    {
        return $this->repository->fetchOneById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function addAlbum(array $data)
    {
        $this->form->setData($data);

        if ($this->form->isValid()) {
            $album = new Album();

            $album->setId($data['id'] ?: null);
            $album->setArtist($data['artist']);
            $album->setTitle($data['title']);

            if (!$this->repository->save($album)) {
                throw new \Exception('Unable to save the album');
            }

            return true;
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAlbum(array $album)
    {
        if (!$this->repository->delete($album)) {
            throw new \Exception(sprintf(
                'Unable to delete album "%s (%s)"',
                $album['title'],
                $album['artist']
            ));
        }

        return true;
    }
}
