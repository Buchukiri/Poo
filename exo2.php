<?php
spl_autoload_register();

use App\Objects\ElementarySchool;
use App\Objects\HighSchool;
use App\Objects\SecondarySchool;
use App\Objects\Teacher;
use App\Objects\School;
use App\Views\Question;
use App\Views\Page;

$pageContent = '';

    // <!-- QUESTION 1 -->
$paul = new Teacher("Mourin", "Paul");
$elise = new Teacher("Sdiam", "Elise", ["Mathématiques"], new ElementarySchool("Ecole Saint Exupéry", "Hazebrook"));
$q1 = new Question([
    'number' => 1,
    'question' => "Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.<br>Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.<br>Créer 2 professeurs différents.",
    'answer' => ''
]);
$pageContent .= $q1->getHtml();

//     // <!-- ANSWER  1 -->


// var_dump($paul, $elise);


    // <!-- QUESTION 2 -->
$paul->setSchool(new SecondarySchool("Ecole Sainte Julie", "Quebec"));
$elise->setSchool(new HighSchool("Ecole Trucmuche", "Lyon"));
$q2 = new Question([
    'number' => 2,
    'question' => "Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.Modifier les écoles des 2 professeurs.Afficher les écoles des 2 professeurs.",
    'answer' => $paul->getFirstname()." : ".$paul->getSchool()->getName()."<br>".$elise->getFirstname()." : ".$elise->getSchool()->getName()."<br>"
]);
$pageContent .= $q2->getHtml();


//     // <!-- ANSWER  2 -->


// echo $paul->getFirstname()." : ".$paul->getSchool()->getName()."<br>"; 
// echo $elise->getFirstname()." : ".$elise->getSchool()->getName()."<br>"; 



    // <!-- QUESTION 3 -->
$q3 = new Question([
    'number' => 3,
    'question' => "Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.Tester l'ajout, la suppression et l'affichage sur chacun des profs.",
    'answer' => $paul->getFirstname()." : ".$paul->getSubjectsToString()."<br>". $elise->getFirstname()." : ".$elise->getSubjectsToString()."<br>"
]);
$pageContent .= $q3->getHtml();


//     // <!-- ANSWER  3 -->

// $paul->addSubject("Musique");
// $paul->addSubject("Français");
// echo $paul->getFirstname()." : ".$paul->getSubjectsToString()."<br>";
            
// $paul->removeSubject("Français");
// echo $paul->getFirstname()." : ".$paul->getSubjectsToString()."<br>";

// echo $elise->getFirstname()." : ".$elise->getSubjectsToString()."<br>";

    // <!-- QUESTION 4 -->
$q4 = new Question([
    'number' => 4,
    'question' => "Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                \"Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.\".Afficher la phrase de présentation des 2 profs.",
    'answer' => $paul->introduceMySelf()."<br>".$elise->introduceMySelf()."<br>"
]);
$pageContent .= $q4->getHtml();


//     // <!-- ANSWER  4 -->
// $paul->introduceMySelf()."<br>";
// $elise->introduceMySelf()."<br>";

$view = new Page([
    'title' => 'POO - Des professeurs',
    'headerTitle' => 'POO - Des professeurs',
    'content' => $pageContent
]);

$view->display();

?>
