<?php
/***
 * This class display cards content 
 */
namespace Model;

class User
{	
    public function create()
    {
        $array = [
            [
                'id'    => 1,
                'email' => 'jpascal@gmail.com',
                'password' => 'admin',
                'first_name' => 'Jeanne',
                'last_name' => 'Pascal',
                'role' => 'Administrateur'
            ],
            [
                'id'    => 2,
                'email' => 'rleblanc@gmail.com',
                'password' => 'user',
                'first_name' => 'Robert',
                'last_name' => 'Leblanc',
                'role' => 'Utilisateur'
            ],
        ];

        return $array;
    }
}