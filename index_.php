<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Ti-1</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./lib/css/style.css"> <!-- En dessous de toutes les librairies pour que les redefinissions de bootstart marche -->
    </head>
    <body>
        <header class="container image_header">

        </header>
        <main class="container">
            <nav class="nav">
                <?php
                if(file_exists(filename:'./lib/php/menu.php'))
                {
                    include './lib/php/menu.php';
                }
                ?>
            </nav>
            <section id="menu">
                <?php
                if(!isset($_SESSION['page']))
                {
                    $_SESSION['page'] = "accueil";
                }
                if(isset($_GET['page']))
                {
                    $_SESSION['page'] = $_GET['page'];
                }
                $path = "./pages/" . $_SESSION['page'] . ".php";
                if(file_exists($path))
                {
                    include($path);
                }
                else
                {
                    include('./pages/page404.php');
                }
                ?>
            </section>
        </main>
        <footer class="container">

        </footer>
    </body>
</html>