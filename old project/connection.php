<?php
if(isset($_POST['submit'])){
$username = "root";
$server = "localhost";
$password = "";
$database = "final_trip";

try{
$conn = mysqli_connect($server, $username, $password,
                        $database);
                        // echo "hello";
}

catch(mysqli_sql_exception $e){
  echo "Error h: " . $e;
}
$name  = $_POST['name'];
$department = $_POST['dep'];
$DOB= $_POST['dob'];
$email= $_POST['mail'];
$year= $_POST['year'];
$sql = "INSERT INTO `trip_det` (`name` , `department` , `DOB` ,`email` , `year` ) VALUES ( '$name ' , '$department', '$DOB', '$email', '$year');";
// INSERT INTO `trip_det`( `name`, `department`, `DOB`, `email`, `year`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
$conn->query($sql);
// echo $sql;
// if($conn->query($sql) == true){
//     mysqli_query($conn , $sql);
//     echo "username registered";
// }
// else{
//     echo "error: " ;
// }
$conn->close();
}
?>
