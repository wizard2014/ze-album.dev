<?php

namespace App\Album\Repository;

use App\Album\Entity\Album;

interface AlbumRepositoryInterface
{
    /**
     * @return array
     */
    public function fetchAll();

    /**
     * @param int $id
     *
     * @return Album
     */
    public function fetchOneById($id);

    /**
     * @param Album $album
     *
     * @return bool
     */
    public function save(Album $album);

    /**
     * @param array $album
     *
     * @return bool
     */
    public function delete(array $album);
}
