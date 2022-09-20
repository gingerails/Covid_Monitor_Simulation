<?php
// I keep getting errors with this so I'm including everything down to the exact location
include 'C:\Users\ginge\PhpstormProjects\monitorProject\Entity\Spray.php';
include 'C:\Users\ginge\PhpstormProjects\monitorProject\Entity\Desk.php';
include 'C:\Users\ginge\PhpstormProjects\monitorProject\Entity\Student.php';
include 'C:\Users\ginge\PhpstormProjects\monitorProject\Entity\Classroom.php';

$classroom = createClass();
//echo(print_r($classroom->getStudentsArray()));

function createClass(): Classroom
{
    $isUsed = false;        //init isUsed for now, will update at end of each class period
    $spray = new Spray($isUsed);
    $desk = new Desk($spray);

    $studentsArray = array();
    for($x = 0; $x <= 4; $x++){
        $randBool = (bool) random_int(0,1);   // student is randomly masked or unmasked
        $student = new Student($randBool);
        array_push($studentsArray, $student);   // add to array
    }

    return new Classroom($desk ,$studentsArray);
}
//public function setClassroom(){
//
//}
