<?php
spl_autoload_register();

use App\Objects\School;
use App\Objects\HighSchool;
use App\Objects\ElementarySchool;
use App\Objects\SecondarySchool;
use App\Views\Question;
use App\Views\Page;

$pageContent = '';


    // <!-- QUESTION 1 -->
$q1 = new Question([
    'number' => 1,
    'question' => "Créer les dossiers \"App/Objects\" et y ajouter un fichier PHP pour chacune des classes créées lors des exercices précédents.Assurer le fonctionnement du code des exercices précédents. ",
    'answer' => ''
]);
$pageContent .= $q1->getHtml();

//     // <!-- ANSWER  1 -->


    // <!-- QUESTION 2 -->
$q2 = new Question([
    'number' => 2,
    'question' => "Ajouter les classes dans un namespace.Automatiser l'import des fichiers en utilisant les namespaces.",
    'answer' => ''
]);
$pageContent .= $q2->getHtml();


//     // <!-- ANSWER  2 -->



    // <!-- QUESTION 3 -->
$q3 = new Question([
    'number' => 3,
    'question' => "Mutualiser le code commun des 2 classes grâce à l'héritage.",
    'answer' => ''
]);
$pageContent .= $q3->getHtml();


//     // <!-- ANSWER  3 -->




$view = new Page([
    'title' => 'POO - On réorganise le code',
    'headerTitle' => 'POO - On réorganise le code',
    'content' => $pageContent
]);

$view->display();

?>

