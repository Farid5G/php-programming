<?php
// we want to count the number of the students (+20 marks) whether they are pass or fail
// we want to make a list of students who scored above 25 congratulate them
$pass = 0;
$fail = 0;
$topper_stud = [];
$students = [
    ['name' => 'joseph', 'marks' => 25],
    ['name' => 'Sarah', 'marks' => 5],
    ['name' => 'Anne', 'marks' => 18],
    ['name' => 'Prathan', 'marks' => 23],
    ['name' => 'Simon', 'marks' => 30],
    ['name' => 'Rana', 'marks' => 27],
    ['name' => 'Amir', 'marks' => 24],
    ['name' => 'Meet', 'marks' => 26]
];

foreach($students as $student){
    $marks = $student['marks'];
    if($marks >= 20 ){
        $pass++;
        if($marks > 25){
            $topper_stud[] = $student;
        }
    }
    else{
        $fail++;
    }
}
echo "$fail Number of students failed the exam" . "<br>";
echo "$pass Number of students passed the exam" . "<br>";
echo "Many Many congratulations to the topper students here is the list of students that scored above 25" . "<br>";
print_r($topper_stud);
?>