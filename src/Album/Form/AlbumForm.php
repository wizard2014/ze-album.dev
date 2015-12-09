<?php

namespace App\Album\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilterProviderInterface;

class AlbumForm extends Form implements InputFilterProviderInterface
{
    /**
     * @param string|null $name
     */
    public function __construct($name = null)
    {
        // ignore passed name
        parent::__construct('album');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);

        $this->add([
            'name'    => 'title',
            'type'    => 'text',
            'options' => [
                'label' => 'Title',
            ],
        ]);

        $this->add([
            'name'    => 'artist',
            'type'    => 'text',
            'options' => [
                'label' => 'Artist',
            ],
        ]);

        $this->add([
            'name'       => 'submit',
            'type'       => 'Submit',
            'attributes' => [
                'value' => 'Submit',
            ],
        ]);
    }

    /**
     * @return array
     */
    public function getInputFilterSpecification()
    {
        return [
            [
                'name'     => 'id',
                'required' => true,
                'filters'  => [
                    ['name' => 'Int'],
                ],
            ],
            [
                'name'       => 'artist',
                'required'   => true,
                'filters'    => [
                    ['name' => 'StripTags'],
                    ['name' => 'StringTrim'],
                ],
                'validators' => [
                    [
                        'name'    => 'StringLength',
                        'options' => [
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ],
                    ],
                ],
            ],
            [
                'name'       => 'title',
                'required'   => true,
                'filters'    => [
                    ['name' => 'StripTags'],
                    ['name' => 'StringTrim'],
                ],
                'validators' => [
                    [
                        'name'    => 'StringLength',
                        'options' => [
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ],
                    ],
                ],
            ],
        ];
    }
}
