<?php
// we want to count the number of the adults (+18 years old) and the children 
// we want to make a list of people between 22 to 30 who can apply for the job
$childcount = 0;
$adultcount= 0;
$jobeligible = [];
$peoples = [
    ['name' => 'joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Prathan', 'age' => 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Rana', 'age' => 22],
    ['name' => 'Amir', 'age' => 24],
    ['name' => 'Meet', 'age' => 21]
];
foreach($peoples as $people){
    $age = $people['age'];
    if($age >= 18){
        $adultcount++;
        if($age >=22 && $age <= 30){
            $jobeligible[] = $people;
        }
    }
    else{
        $childcount ++;
    }

}
echo "There are $childcount child in the community"."<br>";
echo "There are $adultcount adults in the community" ."<br>";
echo "Here are the list of the people who can apply for our job openings"."<br>";
print_r($jobeligible);