<?php
/***
 * This class display porgress bars 
 */
namespace Model;

class Accordeon
{	
    // display accordeon     
   public function create()
   {
       $array = [
        [
            'id' => 1,
            'title' => 'Aménagement du nouveau mobilier urbain',
            'content' => 'Le nouveau mobilier urbain a été mis en place selon le calendrier prévu. L\'inauguration a eu lieu le XX mars en présence du Président de la Region. Fourmies est la première ville de France à avoir installé du mobilier urbain entièrement fabriqué sur le territoire à partir de matériaux renouvelables.',
            'image' => 'image_19.jpg',
            'badges' => [
                'Centre ville', 'Les Bleuets'
            ],
        ],
        [
            'id' => 2,
            'title' => ' Démolition des bâtiments délabrés en centre ville',
            'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.',
            'image' => 'image_20.jpg',
            'badges' => [
                'Centre ville'
            ],
        ],
        [
            'id' => 3,
            'title' => 'Transformation de La Marinière en lieu de détente',
            'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.',
            'image' => 'image_21.jpg',
            'badges' => [
                'La Marinière'
            ],
        ]
       ];
       return $array;
   }

   // get content when open accordeon
   public function open()
   {
       $array = [
           [
               'id' => 1,
               'title' => 'Installation de nouveaux bancs',
               'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops 
               cum liberis uxor alitur',
               'jauge' => 60,
           ],
           [
                'id' => 2,
                'title' => 'Installation de parcs à vélo',
                'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops 
                cum liberis uxor alitur',
                'jauge' => 60,
            ],
            [
                'id' => 3,
                'title' => 'Installation de nouvelles poubelles',
                'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops 
                cum liberis uxor alitur',
                'jauge' => 60,
            ],
       ];
       return $array;
   }

     // display accordeon     
     public function quartier()
     {
         $array = [
          [
              'id' => 1,
              'title' => 'Les Bleuets',
              'content' => 'Le nouveau mobilier urbain a été mis en place selon le calendrier prévu. L\'inauguration a eu lieu le XX mars en présence du Président de la Region. Fourmies est la première ville de France à avoir installé du mobilier urbain entièrement fabriqué sur le territoire à partir de matériaux renouvelables.',
              'image' => 'image_14.jpg',
              'badges' => [
                  'Culture', 
                  'Sport',
                  'Logement',
                  'Cadre de vie'
              ],
          ],
          [
              'id' => 2,
              'title' => 'Centre ville',
              'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.',
              'image' => 'image_15.jpg',
              'badges' => [
                  'Logement',
                  'Cadre de vie'

              ],
          ],
          [
              'id' => 3,
              'title' => 'Plateau',
              'content' => 'Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.',
              'image' => 'image_16.jpg',
              'badges' => [
                  'Culture',
                  'Economie',
                  'Cadre de vie'
              ],
          ]
         ];
         return $array;
     }
}