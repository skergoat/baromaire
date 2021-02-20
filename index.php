<?php
// debug
function dd($data) {
    return var_dump($data);die;
}

require('Model/Cards.php'); // card content 
require('Model/Progress.php'); // progress bars 
require('Model/Accordeon.php'); // progress bars 

use Model\Cards; // card content 
use Model\Progress; // progress bars  
use Model\Accordeon; // progress bars  

$cards = new Cards(); // card content 
$progress = new Progress(); // progress bars
$accordeon = new Accordeon(); // accordeons

// get URL 
$url = $_SERVER['REQUEST_URI'];

// FRONT 
if(isset($_GET['progres'])) {
    require('vues/frontend/baromaire_notation/progres.php');
}
else if(isset($_GET['cadre'])) {
    require('vues/frontend/baromaire_notation/cadre_de_vie.php');
}
else if(isset($_GET['demarche'])) {
    require('vues/frontend/baromaire_notation/demarche.php');
}
else if(isset($_GET['engagement'])) {
    require('vues/frontend/baromaire_notation/engagement.php');
}
else if(isset($_GET['quartier'])) {
    require('vues/frontend/baromaire_notation/quartier.php');
}
// ADMIN
else if(isset($_GET['login'])) {
    require('vues/backend/login.php');
}
else if(isset($_GET['admin']) && $_GET['admin'] == 'sign') {
    require('vues/backend/sign.php');
}
else if(isset($_GET['admin']) && $_GET['admin'] == 'engagement') {
    require('vues/backend/engagement.php');
}  
else if(isset($_GET['admin']) && $_GET['admin'] == 'action') {
    require('vues/backend/action.php');
}  
else if(isset($_GET['admin']) && $_GET['admin'] == 'dashboard') {
    require('vues/backend/dashboard.php');
}  
// HOMEPAGE 
else {
    // require('vues/frontend/baromaire_home/create.php');
    require('vues/frontend/baromaire_home/home.php');
} 
