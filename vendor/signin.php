<?php
session_start();
    require_once 'connect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($connect,"SELECT * FROM account WHERE Email = '$email' AND Password = '$password';");     

    //$res = mysqli_query($connect, $database); 
    if (mysqli_num_rows($result) > 0 ) {
    $user = mysqli_fetch_assoc($result); 
    $_SESSION['user'] = [
        "name" => $user ['Name'],
        "id" => $user['Account_id'],
        "surname" => $user ['Surname'],
        "phone" => $user ['Phone'],
        "email" => $user ['Email'],
        "Order_Name" => $user ['Order_Name']
    ];

    header('Location: ../profile.php');
    
   } else { 
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../login.php');
   }
    ?>
    <pre>
   <?php
    print_r($result);
    print_r($user);
 ?>   
</pre>