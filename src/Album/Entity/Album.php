<?php

namespace App\Album\Entity;

use Zend\Stdlib\ArraySerializableInterface;

class Album implements ArraySerializableInterface
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $artist;
    /**
     * @var string
     */
    protected $title;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param array $array
     */
    public function exchangeArray(array $array)
    {
        $this->id       = $array['id'] ?: null;
        $this->artist   = $array['artist'];
        $this->title    = $array['title'];
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
