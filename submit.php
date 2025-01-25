<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    echo "<h1>Спасибо, $name!</h1>";
    echo "<p>Ваш номер: $phone</p>";
    echo "<p>Ваше сообщение: $message</p>";
    echo "<p>Мы свяжемся с вами по email: $email</p>";
} else {
    // Если форма не была отправлена, выводим сообщение
    echo "<p>Форма не была отправлена.</p>";
}
?>