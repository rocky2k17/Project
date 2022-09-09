<?php
	include_once 'mysql/mysql.php';

?>

<?php

    session_start();

    $con;

    mysqli_select_db($con, 'gswa');

    $name1 = $_POST['username'];
    $email1 = $_POST['email'];

    //$q1 = "select * from gswa_info where username = '$name1'";
    $q2 = "select * from gswa_info where email = '$email1'";

    //$result1 = mysqli_query($con,$q1);

    $result2 = mysqli_query($con, $q2);

   // $num1 = mysqli_num_rows($result1);

    $num2 = mysqli_num_rows($result2);
    
    if( $num2 == 0)
    {
        $_SESSION['username'] = $name1;
        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $profession = $_POST['profession'];
            $university = $_POST['university'];
            $email = $_POST['email'];
            $files = $_FILES['files'];				
            $filename = $files['name'];
            $fileerror = $files['name'];
            $filetmp =  $files['tmp_name'];

            $fileext = explode('.',$filename);
            $filecheck = strtolower(end($fileext));


            $fileextstored = array('png','jpg','jpeg');
            if(in_array($filecheck, $fileextstored)){

                $destinationfile = 'upload/'.$filename;
                move_uploaded_file($filetmp, $destinationfile);

                $q = "INSERT INTO `gswa_info`(`username`, `profession`, `university`, `email`, `image`) VALUES ('$username','$profession','$university','$email','$destinationfile')";
                $query = mysqli_query($con,$q);

                $displayquery = "SELECT * FROM gswa_info ";

                $querydisplay = mysqli_query($con,$displayquery);

                

            }
        }
        header("Location: ridirect2.php");
        
    }
    else
    {
        
        header("Location: ridirect.php");
    }

?>