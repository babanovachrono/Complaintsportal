<?php
      session_start();
       



      function studentArray($studentID){
        "SELECT * FROM complaints where StudentID='".$studentID."'";
    $staffidarray = array();
    $complaints= array();
    
    include 'dbconnect.php';
    $result = mysqli_query($conn,$query);
    
    
    while($row = mysqli_fetch_array($result)){
      
    // Append to the array
    $stuffidarray[] = $row['Sub-SchoolName'];  
    $complaints[] = $row['Sub-SchoolID'] ;
    
    
    }
    $stringcomplaint= array();
    return $stringcomplaint($stuffidarray,$complaints);
    }

        ?>