<?php
    require 'config.php';
    require 'dao/UsuarioDaoMySql.php';
    
    $usuarioDao = new UsuarioDaoMysql($pdo);
    
    $usuario = false;
    $id = filter_input(INPUT_GET,'id');

    if ($id) {
        $usuario = $usuarioDao->findById($id);
    } 
    if($usuario === false){
        header("Location: index.php");
        exit;
    }
?>

<h1>Editar usuario</h1>
<form action="edit_action.php" method="post">
    <input type="hidden" name="id" value="<?=$usuario->getId()?>">
    <label>
        Nome: 
        <br>
        <input type="text" name="name" value="<?=$usuario->getNome()?>">
        <br>
    </label>

    <br>

    <input type="submit" value="Editar">
</form>
