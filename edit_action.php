<?php
require 'config.php';

$id = filter_input(INPUT_POST,'id');
$name = filter_input(INPUT_POST,'name');

if ($name && $id) {
    
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name WHERE id = :id ");
    $sql->bindValue(":name",$name);
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: index.php");
    exit;
    
} else {
    header("Location: adicionar.php");
    exit;
}