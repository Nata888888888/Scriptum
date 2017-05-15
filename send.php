<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars( $name );;
$surname = htmlspecialchars( $surname );
$email = htmlspecialchars( $email );
$message = htmlspecialchars( $message ); 

$name = urldecode( $name );
$surname = urldecode( $surname );
$email = urldecode( $email );
$message = urldecode( $message ); 

echo $name;
echo $surname;
echo $email;
echo $message;

mail("rozmarynovych@gmail.com", "Заявка с сайта", "Name: ".$name.". Surname: ".$surname.". E-mail: ".$email.". Message: ".$message, "From: example2@mail.ru \r\n");

if (mail("rozmarynovych@gmail.com", "Заявка с сайта", "Name: ".$name.". Surname: ".$surname.". E-mail: ".$email.". Message: ".$message, "From: example2@mail.ru \r\n"))
 { 
    echo "сообщение успешно отправлено"; 
 } else { 
    echo "при отправке сообщения возникли ошибки"; 
}
?>