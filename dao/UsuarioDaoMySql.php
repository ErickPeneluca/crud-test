<?php
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $u)
    {
        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome) VALUES (:nome)");
        $sql->bindValue(':nome', $u->getNome());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
    }
    public function findAll()
    {
        $lista = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if ($sql->rowCount() > 0) 
        {
            $data = $sql->fetchAll();

            foreach ($data as $item) 
            {
                $u = new Usuario();
                $u->setId($item['id']);
                $u->setNome($item['nome']);

                $lista[] = $u;
            }
        }

        return $lista;
    }
    public function findById($id)
    {

    }
    public function findByName($name)
    {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE :nome");
        $sql->bindValue(":nome", $name);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $u = new Usuario();
            $u->setId($data['id']);
            $u->setNome($data['nome']);

            return $u;
        } else {
            return false;
        }
    }
    public function update(Usuario $u)
    {

    }
    public function delete($id)
    {

    }
}