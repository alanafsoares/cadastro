<!DOCTYPE html>
<html lang="pr-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
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
        <h1>Cadastrar</h1>
    <form method="post" action="cadastro.php">
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
              <button class="btn-login">Enviar</button>
      </form>
      <a href="index.php">Faça Login</a>
  </div>
</div>
</body>
</html>