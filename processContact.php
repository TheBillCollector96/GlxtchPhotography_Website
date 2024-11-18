
<?php
    //Inserting data from an HTML form into a database table.
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "glxtch_photography";
    $ServerConnection = mysqli_connect($server, $username, $password);
    
    $id = null;
    $firstName = $_POST["name"];
    $lastName = $_POST["surname"];
    $phoneNumber = $_POST["phone"];
    $emailAddress = $_POST["email"];
    $theSubject = $_POST["subject"];
    $theMessage = $_POST["message"];
    
    if($ServerConnection){
        
        $DbSelection = mysqli_select_db($ServerConnection, $database);
        if($DbSelection){
            
            $SQLquery = "INSERT INTO webclients(name, surname, phoneNumber, email, subject, message) VALUES ('".$firstName."','".$lastName."','".$phoneNumber."','".$emailAddress."','".$theSubject."','".$theMessage."')";
            $Reslut = mysqli_query($ServerConnection, $SQLquery);
            if($Reslut){
                echo 'Record created successfully. <a href="index.php">Click here to go to the Home page</a>';
            }else{
                echo 'Unable to create the record';
            }
        }else{
            echo 'Unable to select the Database: '.$database;
        }
    } else {
        echo 'Unable to connect to Server: '.$server;
    }
?>
