<? require_once '../Model/validadorAcesso.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h2>Bem-vindo ao Lectus, <?php echo htmlspecialchars($_SESSION['login']); ?></h2>
    <a href="../Controller/login.php?logout">Sair</a>
</body>

</html>