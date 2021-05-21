<?php
    $FirstName = $_POST['FirstName'];
    $SecondName = $POST['SecondName'];
    $Email = $POST['Email'];
    $ConfirmEmail = $POST["ConfirmEmail"];
    $Password = $POST["Password"];

    if(!empty($FirstName) || !empty($SecondName) || !empty($Email) || !empty($ConfirmEmail) || !empty($Password))
    {
        $host="localhost";
        $dbUserName="root";
        $dbPassword="";
        $dbName="Register";

        $conn=new mysqli($host, $dbUserName, $dbPassword, $dbName);
        if(myslqi_connect_error()){
            die('Connect Error('.mysqlli_connect_errno().')'.mysqli_connect_error());
        }else{
            $SELECT = "SELECT email From rgister Where email=? Limit 1";
            $INSERT = "INSERT Into register (FirstName,SecondName,Email,ConfirmEmail, password) values(?,?,?,?,?)";
            

            $stmt=$conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum=$stmt->num_rows;

            if($rnum==0){
                $stmt->colse();

                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("ssssli",$FirstName,$SecondName,$Email,$ConfirmEmail,$Password);
                $stmt->execute();
                echo "New recor inserted sucessfuly";
            } else{
                echo "Someone already register using this email";
            }
            $stmt->close();
            $conn->close();
        
        }
    }
    else{
        echo "All field are required";
        die();
    }

?>