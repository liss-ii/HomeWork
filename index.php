<?php

const DOCKROOT = __DIR__;
include_once __DIR__ . "/vendor/autoload.php";
$db = new \University\Database();

$router = new University\Services\Router();
$router->dispatch();

die();




//$test = new  \University\TestDb();
//$test->migrate();

//$test = new  \University\TestDB2();
//$test->migrate();

/*$exam = new University\Assessment\Exam();


$exam->setId(2);
$exam->setScores(35);


$exam->getPersistence()->save();

$exam->getPersistence()->load(1);

$collection = $exam->getPersistence()->getCollection();



print_r($exam);
die();
*/

$stud = new University\Person\Student();
$stud->setName('Ivan', 'Ivanovich', 'Ivanov');
echo 'Student: '.$stud->getName();

$log = new University\Services\Logger();
$log->logmessage("jhjhgjhgjh");
?>
    <br>
<?php
$stud->setKnowledgeLevel(90);
echo 'Knowledge Level: '.$stud->getKnowledgeLevel();
?>
 <br><br>
<?php
$teach = new University\Person\Teacher();
$teach->setName('Petro', 'Petrovich', 'Petrov');
echo 'Teacher: '.$teach->getName();
?>
<br>
<?php
$teach->setTeachersmood(0.8);
echo 'Teachers mood: '.$teach->getTeachersmood()."(".$teach->getTeachersmoodString().")";
?>
    <br><br>

<?php
    echo 'Try to pass exam: '.$stud->TryToPass($teach->getTeachersmood());
?>
<br><br>
<?php
$ex  = new University\Assessment\Exam();
echo 'Exam result: '.$ex->getResultLetter($stud->TryToPass($teach->getTeachersmood())).". Grade: ".$ex->getGrade($ex->getResultLetter($stud->TryToPass($teach->getTeachersmood())));

?>

<br><br>
<?php
$zach = new University\Assessment\Credit();
echo 'Credit result: '.$zach->getResultLetter($stud->TryToPass($teach->getTeachersmood())).". Grade: ".$zach->getGrade($zach->getResultLetter($stud->TryToPass($teach->getTeachersmood())));

?>

<?php
$ses = new University\Session\Session();



?>
