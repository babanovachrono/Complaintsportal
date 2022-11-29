<?php
include lecturers.php;
 $value = $_POST['value'];
//you can apply validations if you want.
//Now, run the query and send a response. Response can be a simple message like data submitted etc. So
 $newsubSchoolNameArray=subschoolArray($value)[0];
                               $newsubSchoolIDArray=subschoolArray($value)[1];
                                /*try{
                                      for ($x = 0; $x <= count($newsubSchoolNameArray)-1; $x++) {
                                        echo '<option value='.$newsubSchoolIDArray.'>'.$newsubSchoolNameArray.'</option>';
                                                        }
                                    
                                    }catch( Exception $e ){
                                                    echo $e->getMessage() ;}
                                                    */
                                          
                                          
                                  //echo $newsubSchoolNameArray[0];

echo "inserted"; 
?>