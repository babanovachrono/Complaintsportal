<?php
session_start();
include 'dbconnect.php';

try{
$query="select * from school";
$nameArray = array();
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
// Append to the array
$nameArray[] = $row['SchoolName'];  
$idArray[] = $row['SchoolID'] ;


}

}catch( Exception $e ){
    echo $e->getMessage() ;
}

function subschoolArray($schoolID){
    $query="select * from sub-school where schoolID=".$schoolID;
$subschoolnameArray = array();
$subschoolidArray = array();

include 'dbconnect.php';
$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result)){
  
// Append to the array
$subschoolnameArray[] = $row['Sub-SchoolName'];  
$subschoolidArray[] = $row['Sub-SchoolID'] ;


}
$subschool= array();
return $subschool($subschoolnameArray,$subschoolidArray);
}
function unitsArray($staffID){
    $query='SELECT * FROM lectdist where staffid="'.$staffID.'"';
$subschoolnameArray = array();
$subschoolidArray = array();

include 'dbconnect.php';
$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result)){
  
// Append to the array
$subschoolnameArray[] = $row['Sub-SchoolName'];  
$subschoolidArray[] = $row['Sub-SchoolID'] ;


}
$subschool= array();
return $subschool($subschoolnameArray,$subschoolidArray);
}
?>