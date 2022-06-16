<?php
//all your code
//$myName= "Kenneth Njau";
//echo{"Welcome to PHP Getting Started"};
//arrays
$students = array("Purity", "Annete", "Roy", "Junior", "Jamal");
echo $students[2];
//Associative array
$myMarks = array("Assessment"=> 25
                    "CAT"=> 15
                    "Projects"=> 35
                    "Attendance"=> 8
                );
echo"My Project Marks: " .$myMarks[ "Projects"];  

// Multidimensional arrays
$WebDevTechnologies= array(
    'frontend'=> array('HTML', 'CSS', 'JS', 'Bootstrap')
    'backend'=> array('PHP', 'Python', 'Java', 'JS')
    'frameworks'=> array('Laravel', 'Django', 'SpringBoot', 'Flutter')
    'database'=> array('MySQL', 'PostgreSQL', 'MongoDB', 'Firebase')
);
echo$WebDevTechnologies['frontend'][2];
echo$WebDevTechnologies['backend'][2];
echo$WebDevTechnologies['frameworks'][2];
echo$WebDevTechnologies['database'][0];

?>