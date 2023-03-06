<?php
/*
 * @package: Aplicacion Final
 * @author: Alejandro Otálvaro Marulanda
 * @since: 26 01 2023
 * INDEX EN EL QUE SOLO SE MODIFICA LA VISTA, EL FOOTER ESTÁ AQUÍ PORQUE ES SIEMPRE EL MISMO EN TODAS LAS PÁGINAS.
 */
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>Aplicacion Final</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link href="./webroot/css/estilos-inicioPublico.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container">

            <header>
                <div id="divReloj" class="divReloj">
                    <script src="webroot/js/reloj.js">script</script>
                </div>
                <h1>ALEJANDRO OTÁLVARO MARULANDA</h1>
                <br>
                <h3>APLICACIÓN FINAL</h3>
            </header>
            <div class="paginaEnCurso">
                <section>
                    <fieldset>
                        <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; //muestra dentro del body, la vista que carga de las vistas ?>
                    </fieldset>
                </section>
            </div>

            <footer>
                <a href="/../index.php"  style="text-decoration:none">
                    <img class="iconoCasa" src="../doc/home.png"  alt="inicio" title="inicio" />
                </a>
                <a href="../doc/CV.pdf"  target="_blank" style="text-decoration: none">
                    <img class="icono_cv" src="../doc/cv-logo.png" alt="curriculum" title="curriculum vitae" class="icono_cv" />
                </a>
                
                <a href="doc/phpdoc/index.html"  target="_blank" style="color: black; text-decoration: none">
                    <img class="iconoPhpDoc" src="webroot/images/doc.png"  alt="phpDoc" title="phpDoc" />
                </a>

                © Alejandro Otálvaro Marulanda

                <a href="https://github.com/alexotalvaro/206DWESProyectoFinal " target="_blank" style="text-decoration: none">
                    <img class="iconoGit" src="../doc/git.png" alt="git" title="GIT"/>
                </a>

                <form> <input class="botonLogin" type="submit" name="tecnologias" value="Tecnologías"></form>

                <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
                   style="text-decoration: none">
                    <img class="icono_link" src="../doc/link2.png" alt="linkedin"  title="linkedin"  />
                </a>

            </footer>
        </div>
    </body>

</html>
