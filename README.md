# Sistema de Login

> Esse sistema foi desenvolvido com funcionalidades básicas como cadastro de usuário e login no sistema com o usuário cadastrado (usuário, email e senha) salvo no banco de dados - onde contém uma tabela mostrando os mesmos.

# Funcionalidades 
> Registro de novo usuário, email e senha
> Login 
> Logout

# Requisitos
> Servidor Web
> PHP, HTML, CSS
> MySQL ou outro sistema de banco de dados compatível 

# Instalação
> Este repositório deve estar na pasta htdocs do seu servidor 
> Código utilizado para criar o banco de dados SQL e a tabela de usuários:
<!--
CREATE DATABASE login;
USE login;
CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    password VARCHAR(255) NOT NULL
);  
-->
> As informações anteriores são as variáveis que devem constar no arquivo `config.php` para dar início na conexão entre navegador e servidor 
> Abra o sistema no navegador com o endereço /localhost/login/index.php e faça seu novo registro no site.