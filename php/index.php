<?php
$host = 'db';
$user = 'maroine';
$password = 'maroine';
$db = 'cdweb';
$conn = new mysqli($host,$user,$password,$db);
if($con->connect_error){
    echo '!!!! Fallido !!!!!' . $conn->connect_error;

}
echo '¡¡¡ Esta es una aplicacion web sencilla para practicar. Saludos!!! ';
?>
