<?php
session_start();
    require_once 'connect.php';
    $mail = $_SESSION['user']['email'];
    $order = $_SESSION['user']['Order_Name'];
    $Order_Name = $_POST["Order_Name"];
    $items = implode('; ', $Order_Name);
    $query2 = "UPDATE account SET Order_Name = ('$items') WHERE Email = '$mail'  ";
    $result2 = mysqli_query($connect,$query2);
    $_SESSION['message'] = 'Вы успешно оставили заявку!';
  $order = $items;
    $_SESSION['user']['Order_Name'] = $order;
    header('Location: ../profile.php');
    ?>