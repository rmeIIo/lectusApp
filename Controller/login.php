<?php
session_start();

$_SESSION['x'] = 'Valor de x';
print_r($_SESSION);
echo '<hr>';
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$usuarios_app = array(
    array('id' => 1, 'usuario' => 'admin', 'password' => 'admin', 'perfil_id' => 1),
    array('id' => 2,'usuario' => 'rmeiio', 'password' => '12520321Greg%', 'perfil_id' => 1),
    array('id' => 3, 'usuario' => 'jose', 'password' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'usuario' => 'maria', 'password' => '1234', 'perfil_id' => 2),
);

foreach ($usuarios_app as $user) {
    if ($user['usuario'] == $_POST['usuario'] && $user['password'] == $_POST['password']) {
        echo 'Usuário app: ' . $user['usuario'] . ' | Senha app: ' . $user['password'];
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo '<br> Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: ../index.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: ../View/loginPage.php?login=erro');
}
