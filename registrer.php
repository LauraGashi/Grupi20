<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="registrer.css" />
    <title>Form</title>
  </head>
  <body>
    <div class="container">
      <h1>Registrer</h1>
      <form>
        <div class="form-control">
          <input type="text" required>
          <!--qekjo required e qet PLEASE FILL OUT THIS FIELD-->
          <label id="name">First Name</label>

          <div class="form-control">
            <input type="text" required>
            <label>Last Name</label>


        <div class="form-control">
          <input type="email" required>
          <label id="email">Email</label>
          <!-- <label>
            <span style="transition-delay: 0ms">E</span>
              <span style="transition-delay: 50ms">m</span>
              <span style="transition-delay: 100ms">a</span>
              <span style="transition-delay: 150ms">i</span>
              <span style="transition-delay: 200ms">l</span>
        </label> -->
        </div>

        <div class="form-control">
          <input type="email" required>
          <label>Confirm Email</label>

        <div class="form-control">
          <input type="password" required>
          <label>Password</label>
        </div>

        <button class="btn">Register</button>

        <?php
class User {

public $email;
public $name;

public function __construct($name,$email){

$this->email = $email;
$this->name = $name;
}

public function login(){

    echo $this->name . 'logged in' ;
}
}
$userOne= new User('Liridona' , 'liridona.baliu@student.uni-pr.edu');
$userOne->login();

?>
      </form>
    </div>
    <script src="registrer.js"></script>
  </body>
</html>