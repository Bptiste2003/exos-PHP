<?php

if( 
    isset($gardeManger) &&
 is_array($gardeManger) && isset($gardeManger['legumes']) && isset($gardeManger['epicerie']) && isset($gardeManger['cremerie'])){

    echo  'Exercice 1 validé ✔️';
}else{
    echo 'Exercice 1 non validé ❌';
}

if( isset($gardeManger) && isset($gardeManger['legumes']) && isset($gardeManger['epicerie']) &&  isset($gardeManger['cremerie']) ){

    $legumesReference = ['Salades', 'Tomates', 'Navets', 'Oignons', 'Poivrons'];
    $epicerieReference = ['Sel', 'Poivre', 'Curry', 'Farine', 'Sucre'];
    $cremerieReference = ['Oeufs', 'Beurre', 'Lait de soja'];

    $condition1 = empty(array_diff($gardeManger['legumes'], $legumesReference)) && empty(array_diff($legumesReference, $gardeManger['legumes']));
    $condition2 = empty(array_diff($gardeManger['epicerie'], $epicerieReference)) && empty(array_diff($epicerieReference, $gardeManger['epicerie']));
    $condition3 = empty(array_diff($gardeManger['cremerie'], $cremerieReference)) && empty(array_diff($cremerieReference, $gardeManger['cremerie']));
        
    // echo '<br>';
    // var_dump($gardeManger['legumes']);
    // var_dump($condition2);
    // var_dump($condition3);
    
    if ( $condition1 && $condition2 && $condition3){
        echo  'Exercice 2 validé ✔️';
    }else{
        echo 'Exercice 2 non validé ❌';
    };
}



if( isset($recette1) && is_array($recette1) && isset($recette2) && is_array($recette2)){
    $condition1 = array_diff($recette1, array('Salades', 'Tomates' , 'Oignons' , 'Curry' , 'Oeufs'));
    $condition2 = array_diff($recette2, array('Navets', 'Sel' ,  'Poivrons' , 'Poivre', 'Beurre'));
    echo '<br>';
    if( 
        isset($recette1) &&
         is_array($recette1) &&
          count($condition1) === 0 &&
          isset($recette2) &&
          is_array($recette2) &&
          count($condition2) === 0
           ){
            echo  'Exercice 3 validé ✔️';
        }else{
            echo 'Exercice 3 non validé ❌';
        };
}
