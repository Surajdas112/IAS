<?php
include('inc/connection.php');
session_start() ;

$date = date('Y-m-d');

    
        
  
        if (isset($_POST)) {


          foreach($_POST as $qNum => $val) {
            $userAnswer = 
                        "INSERT INTO `online_test-answers` (`Subject`, `Time`, `Name`, `Deep_Enrollment_No`, `Email`, `Test_Number`, `Question_Number`, `User_Answer`, `Correct_Answer`) 
                         VALUES ('INDIA POLITY','12:30:55.12345-05:00','SURAJ', 'T1000', 'a@a.a', '1', '1','".$val."','a'  )";


                          if ($conn->query($userAnswer) === TRUE ) {
                            $_SESSION["currentQuestion"]+=1 ;
                            print $_SESSION["currentQuestion"];
                            header('Location:Quiz.php');
                          } else {
                            print "Error: " . $userAnswer . "<br>" . $conn->error;  
                          }
          }
          
        } else {
          // Assume btnSubmit 
        }
      




?>