<?php

namespace App\Album\Repository;

use App\Album\Entity\Album;
use Doctrine\DBAL\Connection;

class AlbumRepository implements AlbumRepositoryInterface
{
    /**
     * @var Connection
     */
    protected $db;

    /**
     * @param Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll()
    {
        $qb = $this->db->createQueryBuilder();

        $qb
            ->select('*')
            ->from('album', 'a');

        $result = $qb->execute()->fetchAll();

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchOneById($id)
    {
        $qb = $this->db->createQueryBuilder();

        $qb
            ->select('*')
            ->from('album', 'a')
            ->where('id = :id')
            ->setParameter('id', $id);

        $result = $qb->execute()->fetch();

        if (!$result) {
            throw new \Exception('Row with id: ' . $id . ' not found.');
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function save(Album $album)
    {
        $data = $album->getArrayCopy();

        if (null === $album->getId()) {
            return $this->db->insert('album', $data);
        } else {
            return $this->db->update('album',
                [
                    'artist' => $data['artist'],
                    'title'  => $data['title'],
                ],
                ['id' => $data['id']]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(array $album)
    {
        return $this->db->delete('album', [
            'id' => $album['id'],
        ]);
    }
}
