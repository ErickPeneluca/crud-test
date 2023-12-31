<?php
require 'config.php';
require 'dao/UsuarioDaoMySql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table>
    <tr border= 1; width=10%;>
        <th>ID</th>
        <th>NOME</th>
    </tr>
    <?php foreach($lista as $row): ?>
        <tr>
            <td style="text-align: center;"><?=$row->getId();?></td>
            <td style="text-align: center;"><?=$row->getNome()?></td>
            <td style="display: flex; align-items:center;">
                 <a href="edit.php?id=<?=$row->getId();?>"> [editar] </a>
                 &nbsp; &nbsp;
                 <a href="delete.php?id=<?=$row->getId();?>"> [excluir] </a>
            </td>
        </tr>
   <?php endforeach; ?>
</table>