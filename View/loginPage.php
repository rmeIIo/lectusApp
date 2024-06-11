<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lectus | Onde a leitura encontra o conforto</title>
  <link rel="icon" href="./assets/lectus_logo1.svg" type="image/x-icon" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css" />
</head>

<body class="container loginContainer">
  <main>
    <div class="loginCard">
      <h2>Login</h2>
      <h3>Insira suas credenciais</h3>
      <form class="loginForm" method="post" action="../Controller/login.php">
        <input name="usuario" type="text" placeholder="Usuário" />
        <input name="password" type="password" placeholder="Senha" />

        <?php
        if (isset($_GET['login']) && $_GET['login'] == 'erro') {
        
        ?>

        <div class="error">
          <i class="fas fa-exclamation-triangle"></i>
          <span>Usuário ou senha inválidos</span>
        </div>

        <?php } ?>

        <?php
        if (isset($_GET['login']) && $_GET['login'] == 'naoLogado') {
        
        ?>

        <div class="error">
          <i class="fas fa-exclamation-triangle"></i>
          <span>Realize o login antes de acessar as funcionalidades do sistema</span>
        </div>

        <?php } ?>

        <a href="#">Esqueceu sua senha?</a>
        <button type="submit">Login</button>
      </form>
    </div>
  </main>
</body>

</html>