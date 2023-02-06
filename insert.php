<?php
header('Content-Type: application/json');

$name = $_POST['name'];
$comment = $_POST['comment'];

$pdo = new PDO("mysql:host=localhost;dbname=comments", 'root', 'password');

$stmt = $pdo->prepare("INSERT INTO comments (username, user_comment) VALUES (:na, :co)");
$stmt->bindValue('na', $name);
$stmt->bindValue('co', $comment);
$stmt->execute();

if($stmt->rowCount() >= 1){
    return json_encode("Inserido com sucesso!");
}else{
    return json_encode("Erro!");
}


?>