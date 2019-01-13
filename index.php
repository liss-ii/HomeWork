<?php

//ini_set('include_path', DIR);
include_once 'app/University/Session/SessionInterface.php';
include_once 'app/University/Assessment/AssessmentInterface.php';
include_once 'app/University/Person/Person.php';
include_once 'app/University/Person/Student.php';
include_once 'app/University/Person/Teacher.php';
include_once 'app/University/Assessment/Assessment.php';
include_once 'app/University/Assessment/Exam.php';
include_once 'app/University/Assessment/Credit.php';
include_once 'app/University/Session/Session.php';

$stud = new app\University\Person\Student();
$stud->setName('Ivan', 'Ivanovich', 'Ivanov');
echo 'Student: '.$stud->getName();
?>
    <br>
<?php
$stud->setKnowledgeLevel(90);
echo 'Knowledge Level: '.$stud->getKnowledgeLevel();
?>
 <br><br>
<?php
$teach = new app\University\Person\Teacher();
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
$ex  = new app\University\Assessment\Exam();
echo 'Exam result: '.$ex->getResultLetter($stud->TryToPass($teach->getTeachersmood())).". Grade: ".$ex->getGrade($ex->getResultLetter($stud->TryToPass($teach->getTeachersmood())));

?>

<br><br>
<?php
$zach = new app\University\Assessment\Credit();
echo 'Credit result: '.$zach->getResultLetter($stud->TryToPass($teach->getTeachersmood())).". Grade: ".$zach->getGrade($zach->getResultLetter($stud->TryToPass($teach->getTeachersmood())));

?>

<?php
$ses = new app\University\Session\Session();

?>
