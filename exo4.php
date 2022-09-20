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
$saintBernard = new School("Ecole Saint Bernard", "Arras");
$saintOwl = new School("Ecole Saint Owl", "Marseille");
$q1 = new Question([
    'number' => 1,
    'question' => "Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.Créer 2 écoles et afficher leurs proprités. ",
    'answer' => ''
]);
$pageContent .= $q1->getHtml();

//     // <!-- ANSWER  1 -->
// var_dump($saintBernard, $saintOwl);


    // <!-- QUESTION 2 -->
$marcelPagnol = new HighSchool("Lycée Marcel Pagnol", "Athis-Mons");
$robespierre = new ElementarySchool("Ecole Robespierre", "Le Havre");
$henriWallon = new SecondarySchool("Ecole Henri Wallon", "Le Havre");
$q2 = new Question([
    'number' => 2,
    'question' => "Créer 3 classes correspondants aux 3 types d'école suivants : primaire, des collège et des lycée. Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : \"CP\", \"CM2\", \"5ème\", \"Terminale\", ...).Créer une école de chaque type.",
    'answer' => ''
]);
$pageContent .= $q2->getHtml();


//     // <!-- ANSWER  2 -->

// var_dump(
//     $marcelPagnol->getGrades(),
//     $robespierre->getGrades(),
//     $henriWallon->getGrades(),
// );



    // <!-- QUESTION 3 -->
$q3 = new Question([
    'number' => 3,
    'question' => "Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveu scolaire.",
    'answer' => ''
]);
$pageContent .= $q3->getHtml();


//     // <!-- ANSWER  3 -->
// var_dump(
//     $marcelPagnol->haveGrade("CE1"),
//     $robespierre->haveGrade("CE1"),
//     $henriWallon->haveGrade("CE1"),
// );



    // <!-- QUESTION 4 -->
$q4 = new Question([
    'number' => 4,
    'question' => "Remplacer les propriétés \"école\" des élèves et des professeurs par la classe créée.Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.",
    'answer' => ''
]);
$pageContent .= $q4->getHtml();

$view = new Page([
    'title' => 'POO - Des écoles',
    'headerTitle' => 'POO - Des écoles',
    'content' => $pageContent
]);

$view->display();

?>