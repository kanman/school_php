<?php

$firstName = 'Jonathon';
$lastName = 'Agnew';
$currentGrade = 12;
$IbScore = .25;
$messageBody = '';

if (!$firstName || !lastName) {
echo 'Please enter a student name.' . "\n";    
}

elseif ($currentGrade < 9 || $currentGrade > 12) {
echo 'This is only for secondary school students. Please enter a year level between 9 and 12.' . "\n";

} else {
if ($IbScore < 0.7) {
$messageBody = 'We look forward to seeing you for the commencement of the study assistance program, beginning January!' . "\n";    
}  else  {

switch ($currentGrade){
case 9: 
$messageBody = 'Congratulations on completing the first year of the IB Middle Years Program! We’ll see you in January for the start of your second year!';
break;

case 10: 
$messageBody = 'Congratulations on completing the IB Middle Years Program! We’ll see you on January for the start of the IB Senior Program!';
break;

case 11: 
$messageBody = 'Congratulations on completing the first year of the IB Senior Program! We’ll see you in January for the start of your second year';
break;

case 12: 
$messageBody = 'Congratulations! You’ve graduated from the IB program! Don’t forget to come back and visit.';
break;

default:
$messageBody = 'Error: Grade level is not 9-12!' . "\n"; 
    } 
}    

echo "Dear $firstName $lastName\n";

echo $messageBody;
}    

?>

