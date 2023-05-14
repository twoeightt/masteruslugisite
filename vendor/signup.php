<?php
session_start();
    require_once 'connect.php';
    
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} } 
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
    if (isset($_POST['phone'])) { $phone = $_POST['phone']; if ($phone == '') { unset($phone);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['password_2'])) { $password_2=$_POST['password_2']; if ($password_2 =='') { unset($password_2);} }
 if (empty($name) or empty($password)) 
    {
        $_SESSION['message'] = 'Вы ввели не всю информацию, вернитесь назад и заполните все поля!';
        header('Location: ../check.php');
    }
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $password_2 = stripslashes($password_2);
    $password_2 = htmlspecialchars($password_2);

    $name = trim($name);
    $surname = trim($surname);
    $email = trim($email);
    $phone = trim($phone);
    $password = trim($password);
    $password_2 = trim($password_2);

    include ("connect.php");
    $query = "SELECT Account_id FROM `Account` WHERE email='$email'";
    $result = mysqli_query($connect, $query);
    //$result = mysqli_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['Account_id'])) {
    $_SESSION['message'] = 'Извините, введённый вами логин уже зарегистрирован. Введите другой логин.';
    header('Location: ../check.php');
    }

   
    //$result2 = mysqli_query ("INSERT INTO users (login,password) VALUES('$login','$password')");

    if ($password === $password_2)   
    {
        $session_id = session_id();
        $query2 = "INSERT INTO `account` (`Account_id`, `Name`, `Surname`, `Email`, `Phone`, `Password`,`Order_Name`) VALUES (NULL, '$name', '$surname', '$email', '$phone', '$password',NULL)";
        $result2 = mysqli_query($connect,$query2);
    $_SESSION['message'] = 'Вы успешно зарегистрированы!';
    header('Location: ../login.php');
    
    }
 else {
    $_SESSION['message'] = 'Ошибка! Вы не зарегистрированы.';
    header('Location: ../check.php');
    }



?>