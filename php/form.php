<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "se102";
    
    if(isset($_POST['add-new-data-btn'])) {
   
        $firstName = $_POST['firstName'];
        $lastName = $_POST['secondName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
        
        $sql = "INSERT INTO records (firstName, lastName, age, gender) VALUES ('$firstName', '$lastName', '$age', '$gender')";
        $rs = mysqli_query($conn, $sql);

        if($rs) {
            header('Location: http://localhost/SE102CRUD/index.php');
        }
        mysqli_close($conn);
    }

?>