<? session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./View/style.css" />
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="lectusIcon">
                <img src="./View/assets/lectus_logo1.svg" alt="Lectus Logo" />
                <span>Lec</span>
                <span>tus</span>
            </div>

            <div class="navContainer">
                <div class="coolinput">
                    <label for="input" class="text">Pesquise:</label>
                    <input type="text" placeholder="Busque por título, autor..." name="input" class="input" />
                </div>

                <ul class="navItems">
                    <li class="navItem"><a href="#">Livros</a></li>
                    <li class="navItem"><a href="#">Autores</a></li>
                    <li class="navItem"><a href="#">Editoras</a></li>
                    <li class="navItem"><a href="#">Lançamentos</a></li>
                </ul>

                <div class="navDropdown">
                    <button class="dropButton">Explorar ▼</button>
                    <div class="dropdownContent">
                        <a id="top" href="#">Livros</a>
                        <a class="middle" href="#">Autores</a>
                        <a class="middle" href="#">Editoras</a>
                        <a id="bottom" href="#">Lançamentos</a>
                    </div>
                </div>

                <?php
                if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
                ?>

                <form action="./View/loginPage.php" method="get">
                    <button class="loginButton" type="submit">
                        <div class="loginSign">
                            <svg viewBox="0 0 512 512">
                                <path
                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                </path>
                            </svg>
                        </div>

                        <div class="loginText">Login</div>
                    </button>
                </form>
                <?php 
                } 
                else if (isset($_SESSION['autenticado']) || $_SESSION['autenticado'] = 'SIM') { 
                ?>

                <div class="profileDropdown">
                    <button class="dropProfileButton">
                        <img src="./View/assets/foto perfil.png" alt="Foto de perfil">
                    </button>
                    <div class="dropdownContent">
                        <a id="top" href="#">Meu Perfil</a>
                        <a class="middle" href="#">Minha Estante</a>
                        <a class="middle" href="#">Preferências</a>
                        <a id="bottom" href="./Controller/logoff.php">Sair</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </nav>
</body>

</html>