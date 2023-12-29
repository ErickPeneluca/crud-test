<?php
require 'config.php';

$name = filter_input(INPUT_POST,'name');

if ($name) {
    
    $sql = $pdo->prepare("INSERT INTO usuarios (nome) VALUES (:name)");
    $sql->bindValue(':name', $name);
    $sql->execute();

    header("Location: index.php");
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}