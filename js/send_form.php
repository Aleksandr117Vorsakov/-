<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    $to = "vorsakov1994@gmail.com";  // Замените на ваш email
    $subject = "Новый запрос на услугу от $firstName $lastName";
    $message = "Имя: $firstName\nФамилия: $lastName\nEmail: $email\nВопрос:\n$question";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный запрос.";
}
?>
