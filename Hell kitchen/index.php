<?php
include_once './params.php';

?>

<h1>Bienvenue sur HellKitchen ! 👾</h1>

<?php


//TODO : 1. Créer ton stock

//DOC : ici tu met ton code 
$gardeManger = array(
    "legumes" => array(),
    "epicerie" => array(),
    "cremerie" => array(),
);


//DOC : fin du code 

////////////////////////////////////////////////

//TODO : 2. Remplir le frigo

$camionLegumes = array('Salades', 'Tomates', 'Navets', 'Oignons', 'Poivrons');

$camionEpicerie = array(
    'Provenance' => 'Marseille',
    'Inventaire' => array(
        'Sel', 'Poivre', 'Curry', 'Farine', 'Sucre'
    ),
    'livraison_id' => 32154
);

$camionCremerie = $secretArray;

//DOC : ici tu met ton code 
$gardeManger = array(
    "legumes" => $camionLegumes,
    "epicerie" => $camionEpicerie['Inventaire'],
    "cremerie" => $camionCremerie['rayons']
);

// echo "<pre>";
// print_r($gardeManger['legumes']);
// echo "</pre>";

//DOC : fin du code 
//////////////////////////////////////////////////

//TODO : 3. Créer tes premieres recettes

$recette1 ;
$recette2 ;




//DOC : ici tu met ton code 
$recette1 = array();

foreach ($gardeManger as $gardeManger['legumes']) {
    
    if (isset($gardeManger['legumes']) && isset($gardeManger['legumes'][0])) {
        // echo "<pre>";
        // print_r($gardeManger['legumes'][0] . "<br>");
        // print_r($gardeManger['legumes'][1] . "<br>");
        // print_r($gardeManger['legumes'][3]);
        // echo "</pre>";die();
        foreach ($gardeManger['legumes'] as $gardeManger['epicerie']) {
            echo "<pre>";
            print_r($gardeManger['epicerie']['Inventaire'][0]);
            echo "</pre>";die();
        }
    }
}

//DOC : fin du code 

/////////////////////////////////////








include_once './correction.php';
