# Projeto PHP CRUD com PDO
Este é um pequeno projeto em PHP que implementa um CRUD (Create, Read, Update, Delete) simples utilizando o PDO (PHP Data Objects) para interagir com um banco de dados. O projeto foi desenvolvido sem o uso de programação orientada a objetos (POO), mantendo uma abordagem procedural.

## Configuração do Ambiente
Certifique-se de ter um ambiente PHP configurado e um servidor de banco de dados MySQL disponível. Edite o arquivo config.php com as configurações adequadas para o seu ambiente:

Funcionalidades:
1. Criar Registro
Para adicionar um novo registro ao banco de dados, você pode usar o formulário no arquivo create.php.

1. Ler Registros
A leitura de registros é realizada na página principal (index.php). Aqui, você verá uma lista de todos os registros existentes.

1. Atualizar Registro
Para editar um registro, clique no botão "Editar" ao lado do registro desejado na página principal. Isso o levará ao formulário de edição em update.php.

1. Excluir Registro
Ao lado de cada registro na página principal, há um botão "Excluir" que permite remover o registro correspondente do banco de dados.

Estrutura do Banco de Dados
O banco de dados utilizado neste projeto possui uma tabela chamada usuarios com os seguintes campos:
--
- id (int): Identificador único do usuário (chave primária).
- nome (varchar): Nome do usuário.
  

---
### A estrutura do banco de dados pode ser criada usando o seguinte SQL:

```
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);
```