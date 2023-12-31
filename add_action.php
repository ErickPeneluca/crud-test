<?php
require 'config.php';
require 'dao/UsuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST,'name');

if ($name) {
    
    if ($usuarioDao->findByName($name) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);

        $usuarioDao->add( $novoUsuario);
        
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: adicionar.php");
    exit;
}