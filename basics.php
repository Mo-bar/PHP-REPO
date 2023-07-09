<?php
########################
//! Converting to boolean

var_dump((bool) "");
echo '</br>';
var_dump((bool) "12");
echo '</br>';
var_dump((bool) []);
echo '</br>';
var_dump((bool) [12,2,3]);
echo '</br>';
var_dump((bool) array());
echo '</br>';
var_dump((bool) array(12,34,54));

########################
//! HereDoc vs NowDoc

$fname = 'Mourad';
$lname = 'BARKOUCH';
$ecole = 'EMSI';
echo '</br>';

//? Here doc : skip & parse
echo <<< here
Nom : $lname,
Prenom : $fname, 
Ecole : $ecole
here;
echo '</br>';
echo <<< "here"
Nom : $lname,
Prenom : $fname, 
Ecole : $ecole
here;


echo '</br>';
//? Here doc : skip only
echo <<< 'now'
Nom : $lname,
Prenom : $fname, 
Ecole : $ecole
now;

########################
//! Arrays : 
echo '<pre>';
print_r(
    [
        0 => 'index 0',
        'nom' => 'BARKOUCH',
        'prenom' => 'Mourad',
        'test 1',
        'test 2',
        True => 'true', //! override in index 1
        False => 'false', //! override in index 0
        'innerArray' => [12,23,34,'sdsd','adress' => 'asasasasasasas']

    ]
);

echo '</pre>';
echo '</br>';

########################
//! Passage par valeur vs passage par refference  : 
$a = 'test';
$b = &$a;

echo $a;
echo '<br>';
echo $b;

