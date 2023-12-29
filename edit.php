<?php
    require 'config.php';

    $info = [];
    $id = filter_input(INPUT_GET,'id');

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch( PDO::FETCH_ASSOC );
        } else {
            header("Location: index.php");
            exit;
        }

    } else {
        header("Location: index.php");
        exit;
    }
?>

<h1>Editar usuario</h1>
<form action="edit_action.php" method="post">
    <input type="hidden" name="id" value="<?=$info['id']?>">
    <label>
        Nome: 
        <br>
        <input type="text" name="name" value="<?=$info['nome']?>">
        <br>
    </label>

    <br>

    <input type="submit" value="Editar">
</form>
