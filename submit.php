<?php
    include("action/connect.php");
    // $conn = mysqli_connect('localhost','root','','cryto_evolution');


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
            while ($row = mysqli_fetch_assoc($query)) {
                echo'<script>
                  alert("Email Already Exist, Please Try another one!");
                  window.location="login.php";
                </script>';
            } else {
                # code...
            } 
        }else {
        $sql = "INSERT INTO `users` (firstname,lastname,username,email,phone_number,password)
        VALUES('$firstname','$lastname','$username','$email','$phone_number','$password')";
        $result = mysqli_query($conn,$sql);
    }
    if ($result) {
        print "<script>
        alert('User added successfully');
        window.location='index.php';
        </script>";
    }else {
        die(mysqli_error($conn));
    }
}


    // if (isset($_POST['submit'])) {
        

    //     $firstname=$_POST['firstname'];
    //     $lastname=$_POST['lastname'];
    //     $username=$_POST['username'];
    //     $email=$_POST['email'];
    //     $phone_number=$_POST['phone_number'];
    //     $password=$_POST['password'];
    //     $confirm_password=$_POST['confirm_password'];
    
    // $sqlv = "INSERT INTO `users` (firstname,last_name,username,phone_number,email,password) VALUES('$firstname','$lastname','$username','$phone_number','$email','$password')";
    // $result = mysqli_query($conn,$sqlv);
    // if ($result) {
    //     echo "<script>
    //     alert('User added successfully');
    //     window.location='login.php';
    //     </script>";
        
    // }else {
    //     die(mysqli_error($conn));
    // }
    // }
    
?>
