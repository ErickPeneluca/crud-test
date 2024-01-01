<?php
require 'config.php';
require 'dao/UsuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST,'id');
$name = filter_input(INPUT_POST,'name');

if ($name && $id) {
    $usuario = $usuarioDao->findById($id);
    $usuario->setNome($name);

    $usuarioDao->update( $usuario );

    header("Location: index.php");
    exit;
    
} else {
    header("Location: adicionar.php");
    exit;
}