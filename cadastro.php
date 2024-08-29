<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  /* Código para segurança da senha no banco de dados, assim ela fica criptografada */ 
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  /* Código para o SQL inserir informações (nome, email, senha) na tabela de usuários do banco de dados  */
  $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $hashed_password);

  /* Mensagens de alerta em caso de sucesso ou falha após consulta sql */
  if ($stmt->execute()) {
    echo "Usuário criado com sucesso";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }

  $stmt->close();
}
  $conn->close();