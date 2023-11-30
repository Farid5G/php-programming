<?php
if(isset($_POST['submit'])){
$server = "localhost";
$user = "root";
$password = "";
$db = "first_db";

// $conn = new mysqli($server,$user,$password,$db);
try{
    $conn = msqli_connect($server, $user, $password,
                            $db);
                             echo "Connection successfully done";
    }
    catch(mysqli_sql_exception $e){
        echo "Error h: " . $e;
      }


$name = $_POST['name'];
$age = $_POST['age'];
$roll_no = $_POST['roll'];

$sql = "INSERT INTO `first` (`name` , `age` , `roll_no`  ) VALUES ( '$name ' , '$age', '$roll_no');";
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