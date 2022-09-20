<?php
spl_autoload_register();

use App\Views\Question;
use App\Views\Page;
use App\Views\Navigation;

$navigation = new Navigation ([
    'links'=>'<li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s\'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>'
]);

$pageContent = '';


    // <!-- QUESTION 1 -->
$q1 = new Question([
    'number' => 1,
    'question' => "Créer une classe permettant de gérer l'affichage d'un template HTML en lisant un fichier grace à la fonction file_get_contents(). ",
    'answer' => ''
]);
$pageContent .= $q1->getHtml();


    // <!-- QUESTION 2 -->
$q2 = new Question([
    'number' => 2,
    'question' => "Créer une classe permettant de gérer l'affichage des pages de ce mini-site.",
    'answer' => ''
]);
$pageContent .= $q2->getHtml();


    // <!-- QUESTION 3 -->
$q3 = new Question([
    'number' => 3,
    'question' => "Créer une classe permettant de gérer le menu de navigation de ce site.",
    'answer' => ''
]);
$pageContent .= $q3->getHtml();


    // <!-- QUESTION 4 -->
$q4 = new Question([
    'number' => 4,
    'question' => "Créer une classe permettant de gérer l'affichage des questions sur ce site.",
    'answer' => ''
]);
$pageContent .= $q4->getHtml();

$view = new Page([
    'title' => 'POO - Des vues',
    'headerTitle' => 'POO - Des vues',
    'content' => $pageContent,
    'navigation' =>$navigation->getHtml()
]);

$view->display();