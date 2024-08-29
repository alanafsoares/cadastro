<?php
  session_start();
  // Arquivo configuração banco de dados
  require_once "config.php";

  /* Método POST para enviar informações do navegador para o servidor de forma mais segura, não sendo visíveis na URL */
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];    
  }

  /* Consulta do SQL para selecionar usuário */
  $sql = "SELECT * FROM users WHERE name = ? AND email = ?";
  // Consulta sql de forma segura
  $stmt = $conn->prepare($sql);
  $stmt ->bind_param("ss", $name, $email);
  $stmt ->execute();

  $result = $stmt->get_result();

  /* Obter resultados da consulta para retornar e armazenar */
  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      $_SESSION["loggedin"] = true;

      header("Location: site.php");
      exit;
    }
  }

  /* Mensagem de erro para ser exibida caso usuário ou senha estejam incorretos */
  else {
    $error = "Usuário ou senha incorretos";
  }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main-login">
    <div class="left-login">
      <h1>Olá! Faça seu cadastro!</h1>
      <img src="404-error.svg" class="left-login-img" alt="">
    </div>

    <div class="right-login">
      <div class="card-login">
        <h1>LOGIN</h1>
    <form method="post" action="index.php">
    <div class="textfield">
      <label for="name">Nome</label>
      <input type="text" name="name" placeholder="Nome" required />
      </div>
        <div class="textfield">
           <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required />
         </div>
              <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" name="password" placeholder="Senha" required />
              </div>
              <button class="btn-login">Login</button>    
  </form>

          <a href="cadastrar.php">Ainda não é cadastrado?</a>

  </div>
</body>
</html>