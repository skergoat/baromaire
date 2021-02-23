<?php

session_start();

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
// connexion 
else if(isset($_GET['login'])) {
    require('vues/backend/connexion/login.php');
}
else if(isset($_GET['admin']) && $_GET['admin'] == 'sign') {
    // create user session 
    $_SESSION['admin'] = true;
    require('vues/backend/connexion/sign.php');
}
else if(isset($_GET['admin']) && $_GET['admin'] == 'infos') {
    require('vues/backend/connexion/profil.php');
}
else if(isset($_GET['admin']) && $_GET['admin'] == 'premier_engagement') {
    require('vues/backend/connexion/premier_engagement.php');
}

// dashboard 
else if(isset($_GET['admin']) && $_GET['admin'] == 'dashboard') {
    require('vues/backend/dashboard.php');
}

// engagements
else if(isset($_GET['admin']) && $_GET['admin'] == 'engagement') {
    require('vues/backend/engagement/engagement.php');
}  
else if(isset($_GET['admin']) && $_GET['admin'] == 'edit') {
    require('vues/backend/engagement/edit_engagement.php');
} 

// action
else if(isset($_GET['admin']) && $_GET['admin'] == 'action') {
    require('vues/backend/actions/action.php');
} 
else if(isset($_GET['admin']) && $_GET['admin'] == 'edit-action') {
    require('vues/backend/actions/edit_action.php');
} 

// domaine d'action 
else if(isset($_GET['admin']) && $_GET['admin'] == 'domaine') {
    require('vues/backend/domaines_action/domaine_action.php');
} 
else if(isset($_GET['admin']) && $_GET['admin'] == 'cadre') {
    require('vues/backend/domaines_action/cadre_de_vie.php');
} 

// quartiers 
else if(isset($_GET['admin']) && $_GET['admin'] == 'quartier') {
    require('vues/backend/quartier.php');
}  

else if(isset($_GET['admin']) && $_GET['admin'] == 'profil') {
    require('vues/backend/profil.php');
} 

// logout 
else if(isset($_GET['admin']) && $_GET['admin'] == 'logout') {
    // delete user session 
    unset($_SESSION['admin']);
    header('Location: /?login');
}
// HOMEPAGE 
else {
    require('vues/frontend/baromaire_home/home.php');
} 
