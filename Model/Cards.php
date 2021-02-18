<?php
/***
 * This class display cards content 
 */
namespace Model;

class Cards
{	
    public function create()
    {
        $array = [
            [
                'title' => 'Cadre de vie',
                'image' => 'image_8.jpg'
            ],
            [
                'title' => 'Economie',
                'image' => 'image_9.jpg'
            ],
            [
                'title' => 'Logement',
                'image' => 'image_10.jpg'
            ],
            [
                'title' => 'Tourisme',
                'image' => 'image_11.jpg'
            ],
            [
                'title' => 'Nos ainés',
                'image' => 'image_12.jpg'
            ],
        ];

        return $array;
    }

    public function quartier()
    {
        $array = [
            [
                'title' => 'Les Bleuets',
                'image' => 'image_13.jpg'
            ],
            [
                'title' => 'Centre Ville',
                'image' => 'image_14.jpg'
            ],
            [
                'title' => 'Champfleury',
                'image' => 'image_15.jpg'
            ],
            [
                'title' => 'Plateau',
                'image' => 'image_16.jpg'
            ],
            [
                'title' => 'Le Mesnil',
                'image' => 'image_17.jpg'
            ],
        ];

        return $array;
    }

    public function engagement()
    {
        $array = [
            [
                'title' => 'Cadre de vie',
                'image' => 'image_8.jpg'
            ],
            [
                'title' => 'Economie',
                'image' => 'image_9.jpg'
            ],
            [
                'title' => 'Logement',
                'image' => 'image_10.jpg'
            ],
            [
                'title' => 'Tourisme',
                'image' => 'image_11.jpg'
            ],
            [
                'title' => 'Nos ainés',
                'image' => 'image_12.jpg'
            ],
            [
                'title' => 'Sport',
                'image' => 'image_24.jpg'
            ],
            [
                'title' => 'Culture',
                'image' => 'image_25.jpg'
            ],
            [
                'title' => 'Ecoquartier',
                'image' => 'image_26.jpg'
            ],
           
        ];

        return $array;
    }
}