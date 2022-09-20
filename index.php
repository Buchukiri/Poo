<?php
spl_autoload_register();

use App\Objects\Student;
use App\Objects\HighSchool;
use App\Objects\SecondarySchool;
use App\Views\Question;
use App\Views\Page;

$pageContent = '';

    // <!-- QUESTION 1 -->
$q1 = new Question([
    'number' => 1,
    'question' => "Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.<br>Définir toutes les propriétés à l'instanciation.",
    'answer' => ''
]);
$pageContent .= $q1->getHtml();

    // <!-- ANSWER  1 -->
$samir = new Student("Damoui", "Samir", new DateTime("2006-08-11"), "1ère");
$sophie = new Student("Lunima", "Sophie", new DateTime("2010-05-12"), "5ème");





// <!-- QUESTION 2 -->
$samir->setGrade("2nde");
$sophie->setGrade("4ème");
$q2 = new Question([
    'number' => 2,
    'question' => "Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.Modifier le niveau scolaire des 2 élèves et les afficher.",
    'answer' => $samir->getFirstname()." : ".$samir->getGrade()."<br>".$sophie->getFirstname()." : ".$sophie->getGrade()

]);
$pageContent .= $q2->getHtml();

    // <!-- ANSWER  2 -->
// echo $samir->getFirstname()." : ".$samir->getGrade()."<br>";
// echo $sophie->getFirstname()." : ".$sophie->getGrade();





    // <!-- QUESTION 3 -->
$q3 = new Question([
    'number' => 3,
    'question' => "Remplacer la propriété d'âge par la date de naissance de l'élève. Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.",
    'answer' => $samir->getFirstname()." : ".$samir->showBirthdate()."<br>".$sophie->getFirstname()." : ".$sophie->showBirthdate()."<br>"
]);
$pageContent .= $q3->getHtml();


    // <!-- ANSWER  3 -->
// echo $samir->getBirthdate()->format("l j F Y")."<br>";
// echo $sophie->getBirthdate()->format("l j F Y");

// echo $samir->getFirstname()." : ".$samir->showBirthdate()."<br>";
// echo $sophie->getFirstname()." : ".$sophie->showBirthdate()."<br>";

// Student::setDateFormat("l j F Y");

// echo $samir->getFirstname()." : ".$samir->showBirthdate()."<br>";
// echo $sophie->getFirstname()." : ".$sophie->showBirthdate()."<br>";




    // <!-- QUESTION 4 -->
$q4 = new Question([
    'number' => 4,
    'question' => " Donner la possibilité aux élèves de donner leur âge.<br>Afficher l'âge des 2 élèves.",
    'answer' => $samir->getFirstname()." : ".$samir->getAge()."<br>".$sophie->getFirstname()." : ".$sophie->getAge()."<br>"
]);
$pageContent .= $q4->getHtml();



    // <!-- ANSWER  4 -->
// echo $samir->getFirstname()." : ".$samir->getAge()."<br>";
// echo $sophie->getFirstname()." : ".$sophie->getAge()."<br>";





    // <!-- QUESTION 5 -->
$samir->setSchool(new HighSchool("Ecole André Malraux", "Bordeaux"));
$sophie->setSchool(new SecondarySchool("Ecole Saint Charles", "Pau"));
$q5 = new Question([
    'number' => 5,
    'question' => " On veut aussi savoir le nom de l'école où va un élève.<br>Ajouter la propriété et ajouter la donnée sur les élèves.",
    'answer' => $samir->getFirstname()." : ".$samir->getSchool()->getName()."<br>".$sophie->getFirstname()." : ".$sophie->getSchool()->getName()."<br>"
]);
$pageContent .= $q5->getHtml();

    // <!-- ANSWER  5 -->
// echo $samir->getFirstname()." : ".$samir->getSchool()->getName()."<br>";
// echo $sophie->getFirstname()." : ".$sophie->getSchool()->getName()."<br>";





    // <!-- QUESTION 6 -->
$q6 = new Question([
    'number' => 6,
    'question' => "Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
    Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.<br>Afficher la phrase de présentation des 2 élèves.",
    'answer' => $samir->introduceMySelf()."<br>".$sophie->introduceMySelf()."<br>"
]);
$pageContent .= $q6->getHtml();




    // <!-- ANSWER  6 -->
// echo $samir->introduceMySelf()."<br>";
// echo $sophie->introduceMySelf()."<br>";

// Student::setIntroduction("Yo, moi c'est ##firstname## ##lastname##, j'ai ##age## ans et je vais à ##school## et je suis en ##grade##.");

// echo $samir->introduceMySelf()."<br>";




$view = new Page([
    'title' => 'POO - Des élèves',
    'headerTitle' => 'Programmation Orientée Objet - Des élèves',
    'content' => $pageContent
]);

$view->display();