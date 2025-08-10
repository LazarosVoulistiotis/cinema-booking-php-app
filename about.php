<?php
session_start();
include ("model/Database.php");
if (isset($_SESSION["uname"])) {
    // User is logged in
    include ("view/top.php"); 
} else {
    // User is not logged in
    include ("view/kalovolos.php"); 
}
include ("view/about.php");

$db = new Database();
$kalov = $db->connect();
                if (isset($_POST['submit'])) {
                  // Εισαγωγή των δεδομένων της φόρμας στον πίνακα με όνομα feedbackTable
                    $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '" . $_POST["fName"] . "',
                                        '" . $_POST["lName"] . "',
                                        '" . $_POST["eMail"] . "',
                                        '" . $_POST["feedback"] . "')";
                    $add = mysqli_query($kalov, $insert_query);   

                    if ($add) {
                      echo "<script>alert('Succesfully Submitted');</script>";
                  }  
                }
                mysqli_close($kalov);
                ?>
            