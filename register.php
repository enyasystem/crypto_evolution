<?php
$_SESSION['message']='';

session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$dbconnect = 'cryto_evolution';

$conn = mysqli_connect($host, $username, $password, $dbconnect);

if (!$conn) {
    echo "no connection detected";
} else {
    // print"Successfull";
}

if (isset($_POST['submit'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

$sqlv = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
  $query = mysqli_query($conn, $sqlv);
  if (!$query|| mysqli_num_rows($query) > 0) {
      while ($row = mysqli_fetch_assoc($query) > 0 )  {
          echo'<script>
            alert("Email Already Exist, Please Try another one!");
            window.location="login.php";
          </script>';
      }    
    }else{
      if ($password!=$confirm_password) {
        echo '<script>
        alert("Passwords do not match! Make sure, your password are the same");
        window.location="login.php";
        </script>';
      }else{
      $sqlv="INSERT INTO `users` (firstname,lastname,username,email,phone_number,password)
      VALUES ('$firstname','$lastname','$username','$email','$phone_number','$password')";
      $qry = mysqli_query($conn, $sqlv);
      if($qry){
      echo '<script>
      alert("You have sucessfully registered, you can now login!");
      window.location="index.php";
      </script>';
}

}

    }
     
  }
?>
