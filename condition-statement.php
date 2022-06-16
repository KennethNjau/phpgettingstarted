<?php
function checkEligibilityToVote()
{
	$age= 20;
	$myName= "Kenneth Njau";
	if($age >=18)
	{
		echo "$myName You are eligibla to vote";
	}
	else
	{
		echo "$myName You are not eligible to vote";
	}
}
//checkEligibilityToVote();

//Grading
function gradingsystem()
{
$marks= 67;
if($marks >=80)
{
	$grade="A (plain)";
}
else if($marks >=75)
{
	$grade="A-";
}
else if($marks >=65)
{
	$grade="B+";
}
else if($marks >=60)
{
	$grade="B";
}
else if($marks >=50)
{
	$grade="C+";
}
else 
{
	$grade="fail";
}

echo "You score is:$grade";	
}
gradingsystem();

?>
