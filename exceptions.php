<?php
if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Confirm_Email = $_POST['Confirm_Email'];
    $Password = $_POST['Password'];
 
    if(empty($Last_Name) || empty($Email) || empty($Confirm_Email) || empty($Password))
    header("Location: file:///C:/Users/Admin/Desktop/Projekti_PI/Grupi20-master/registrer.html?signup=empty");

}
else{
    if (!filter_var($Email, Filter_Validate_Email) {
        header("Location: /registrer.php?signup=invalidEmail");
    }
    else {
echo "Sign up the user!";
    }
    
}
?>