<?php
    require 'config.php';
    require 'dao/UsuarioDaoMySql.php';
    
    $usuarioDao = new UsuarioDaoMysql($pdo);

    $id = filter_input(INPUT_GET,'id');

    if ($id) {

        $usuarioDao->delete($id);
    } 
        header("Location: index.php");
        exit;
    
?>