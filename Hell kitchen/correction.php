<?php

if( 
    isset($gardeManger) &&
 is_array($gardeManger) && isset($gardeManger['legumes']) && isset($gardeManger['epicerie']) && isset($gardeManger['cremerie'])){

    echo  'Exercice 1 validé ✔️';
}else{
    echo 'Exercice 1 non validé ❌';
}

if( isset($gardeManger) && isset($gardeManger['legumes']) && isset($gardeManger['epicerie']) &&  isset($gardeManger['cremerie']) ){
    $condition1 = array_diff($gardeManger['legumes'], array('Salades', 'Tomates', 'Navets', 'Oignons', 'Poivrons') );
    $condition2 = array_diff($gardeManger['epicerie'], array('Sel', 'Poivre', 'Curry', 'Farine', 'Sucre' ));
    $condition3 = array_diff($gardeManger['cremerie'], array('Oeufs','Beurre','Lait de soja' ));
    
    echo '<br>';
    
    if ( count($condition1) === 0 & count($condition2) === 0 && count($condition3) === 0){
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
