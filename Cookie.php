<?php
if (isset($_POST['submit']))
{
    
    setcookie("user",$_POST['username'],time()+3600);
}
?>
<html>
    <body>
        <h3>Set New PHP Cookie</h3>
        <form action="" method="post">
            enter Username: <input name="username" type="text" size="10" /><br />
            <input name="submit" type="submit" value="Submit"/><br />
</form><br /><br />
Go to display Cookie Page <a href="display.php">Click here</a>
</body>
</html>