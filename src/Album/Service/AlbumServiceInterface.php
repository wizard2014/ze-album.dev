<?php

namespace App\Album\Service;

use App\Album\Entity\Album;

interface AlbumServiceInterface
{
    /**
     * Get album list
     *
     * @return array
     */
    public function getAlbums();

    /**
     * Get a album item
     *
     * @param int $id
     * @return Album
     */
    public function getAlbum($id);

    /**
     * Add a new album
     *
     * @param array $data
     * @return bool
     */
    public function addAlbum(array $data);

    /**
     * Delete an album
     *
     * @param array $album
     *
     * @return bool
     */
    public function deleteAlbum(array $album);
}
