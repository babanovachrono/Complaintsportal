<?php
session_start();
include 'dbconnect.php';

// $new = "Yeeees";
try{
if($_SERVER['REQUEST_METHOD']=='POST'){
    $From = $conn->real_escape_string($_POST['From']);
    $To = $conn->real_escape_string($_POST['To']);
    $Message =$conn->real_escape_string($_POST['Message']);
    $Unit =$conn->real_escape_string($_POST['Unit']);//md5 hash for password security
    $_SESSION['From']=$From;
    $_SESSION['To']=$To;
    $_SESSION['Message']=$Message;
    $_SESSION['Unit']=$Unit;
// if($_SERVER['REQUEST_METHOD' == 'POST']){//details is the button name
   

    echo "$From";
 
$sql = "INSERT INTO Complaints (Student_ID,Staff_ID,Complaint,Unit) VALUES('$From','$To','$Message','$Unit')";
if($conn ->query($sql)===true){
    
    header("location: compose.php");

} else{
    header("location: message.php");
}
}
}catch( Exception $e ){
    header("location: message.php");
    echo $e->getMessage() ;
}
?>