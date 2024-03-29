<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho Novinho</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
</head>
<body>
    <header class="header">
        <a href="home" title="Home" class="header-logo">
            <img src="imagens/logo.png" alt="Meu Carrinho Novinho">
        </a>

        <a href="javascript:menu()" title="Menu" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

        <nav class="header-nav">
            <ul class="header-ul">
                <li>
                    <a href="home" title="Home">
                        <i class="fa-solid fa-house-chimney"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="quem-somos" title="Quem Somos">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Quem Somos
                    </a>
                </li>
                <li>
                    <a href="estoque" title="Estoque">
                        <i class="fa-solid fa-car"></i>
                        Estoque
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main container">
        <?php


            $pagina= "$_SERVER[REQUEST_URI]";
            $pagina = "pages{$pagina}.php";
            
            if ( file_exists( $pagina ) )   
                include $pagina;
            else
                include "pages/404.php";

        ?>
    </main>

    <footer class="footer">
        <p>Desenvolvido por <a href="https://www.professorburnes.com.br/">Anderson Burnes</a> e <a href="https://www.linkedin.com/in/pedro-maia-99629a1b5/">Pedro Henrique Maia</a></p>

    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        function menu() {
            $(".header-nav").toggle();
        }
    </script>
</body>
</html>