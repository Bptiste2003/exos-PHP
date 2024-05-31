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

echo "<pre>";
print_r($gardeManger);
echo "</pre>";

//DOC : fin du code 
//////////////////////////////////////////////////

//TODO : 3. Créer tes premieres recettes

$recette1 ;
$recette2 ;




//DOC : ici tu met ton code 
$recette1 = array(
    $gardeManger['legumes'][0],
    $gardeManger['legumes'][1],
    $gardeManger['legumes'][3],
    $gardeManger['epicerie'][2],
    $gardeManger['cremerie'][0]
);

echo "<pre>";
print_r($recette1);
echo "</pre>";

$recette2 = array(
    $gardeManger['legumes'][2],
    $gardeManger['legumes'][4],
    $gardeManger['cremerie'][1],
    $gardeManger['epicerie'][0],
    $gardeManger['epicerie'][1]
);

echo "<pre>";
print_r($recette2);
echo "</pre>";






//DOC : fin du code 

/////////////////////////////////////








include_once './correction.php';
