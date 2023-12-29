<?php
require 'config.php';
$sql = $pdo->query('SELECT * FROM usuarios');

$lista = [];

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll( PDO::FETCH_ASSOC);   
}
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table>
    <tr border= 1; width=10%;>
        <th>ID</th>
        <th>NOME</th>
    </tr>
    <?php foreach($lista as $row): ?>
        <tr>
            <td style="text-align: center;"><?=$row['id'];?></td>
            <td style="text-align: center;"><?=$row['nome']?></td>
            <td style="display: flex; align-items:center;">
                 <a href="edit.php?id=<?=$row['id'];?>"> [editar] </a>
                 &nbsp; &nbsp;
                 <a href="delete.php?id=<?=$row['id'];?>"> [excluir] </a>
            </td>
        </tr>
   <?php endforeach; ?>
</table>