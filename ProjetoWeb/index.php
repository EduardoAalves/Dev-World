<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['email']) and (!isset($_SESSION['password'])))
    {
        header("Location: login.php");
    }
                 
    require_once 'config.php';
    require_once 'crud.php';

    $crud = new Crud(DB_HOST,DB_PORT,DB_NAME,DB_USER,DB_PASSWORD,DB_CHAR);
    $array = [];
    $select = $crud->select('vw_rank_user', $array);
    $select->fetch_assoc();
    
    $email = $_SESSION['email'];

    $arrayContentHtml = ['category' => 'HTML', 'email_user'=>$email];
    $selectContentHtml = $crud->select('Content', $arrayContentHtml);
    $selectContentHtml->fetch_assoc();

    $arrayContentCss = ['category' => 'CSS', 'email_user'=>$email];
    $selectContentCss = $crud->select('Content', $arrayContentCss);
    $selectContentCss->fetch_assoc();

    //$selectContent->fetch_assoc();
    //var_dump($selectContent);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/du.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min">
    <script src="main.js"></script> 
    <title>Aprenda HTML e CSS Basico</title>
</head>

<body>

    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="img/logo.png" alt="">
            <ul>
                <li><a class="active" href="#">Inicio</a> </li>
                <li><a href="#intro">Introdução</a> </li>
                <li><a href="#html">HTML</a> </li>
                <li><a href="#css">CSS</a> </li>
                <li><a href="login.php?a=1">Sair</a> </li>
            </ul>
        </nav>

        <div class="center">
            <h1>Bem-vindos</h1>
            <h2>Aprenda o básico de HTML e CSS! </h2>
            <div class="buttons">
                <a href="https://www.cursoemvideo.com/curso/html5-css3-modulo1/" target="_blank"> <button
                        class="btn">HTML e
                        CSS</button> </a>
                <a href="https://faex.edu.br/vestibular2021/cursos/analise-e-desenvolvimento-de-sistemas"
                    target="_blank"> <button>Curso de ADS</button> </a>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <main>
            <section class="rank">
                <div class="table-responsive-sm">
                <table class="table">
                    
                        <thead>
                        <tr>
                        <td colspan=2>Rank de Usuários</td>
                    </tr>
                            <tr>
                                <td>Email</td>
                                <td>Quantidade Coins</td>
                            </tr>
                        </thead>
                <?php 
                        foreach($select as $atributo)
                        {
                        
                ?>
                    
                        <tbody>
                            <td><?php
                                    echo $atributo['email'];
                                ?>
                            </td>
                            <td><?php
                                    echo $atributo['coins'];
                                ?>
                            </td>
                        </tbody>
                        
                    <?php
                        }
                    ?>
                   </table>  
                </div>
            </section>

            <section class="module parallax parallax-1" id="intro">
                <h1 id="html">Introdução ao HTML</h1>
            </section>

            <section class="module content">
                <div class="container">
                    <h2>HTML</h2>
                    <?php
                        foreach($selectContentHtml as $atributo)
                        {
                            echo $atributo['description'];
                        }
                        
                    
                    ?>
                </div>
                <div class="estrelas">
                    <input type="radio" id="html_star-empty" name="fb" value="" checked/>
                    <label for="html_star-1"><i class="fa"></i></label>
                    <input type="radio" id="html_star-1" name="fb" value="1"/>
                    <label for="html_star-2"><i class="fa"></i></label>
                    <input type="radio" id="html_star-2" name="fb" value="2"/>
                    <label for="html_star-3"><i class="fa"></i></label>
                    <input type="radio" id="html_star-3" name="fb" value="3"/>
                    <label for="html_star-4"><i class="fa"></i></label>
                    <input type="radio" id="html_star-4" name="fb" value="4"/>
                    <label for="html_star-5"><i class="fa"></i></label> 
                    <input type="radio" id="html_star-5" name="fb" value="5"/> <br>
                    <input type="submit" name="botao" value="Enviar Avaliação" class="botaoEnviar" />
                  </div>
            </section>

            <section class="module parallax parallax-2">
                <h1 id="css">Introdução ao CSS</h1>
            </section>

            <section class="module content">
                <div class="container">
                    <h2>CSS</h2>
                    <?php
                        foreach($selectContentCss as $atributo)
                        {
                            echo $atributo['description'];
                        }                        
                    
                    ?>
                    
                </div>
                <div class="estrelas">
                    <input type="radio" id="css_star-empty" name="fb" value="" checked/>
                    <label for="css_star-1"><i class="fa"></i></label>
                    <input type="radio" id="css_star-1" name="fb" value="1"/>
                    <label for="css_star-2"><i class="fa"></i></label>
                    <input type="radio" id="css_star-2" name="fb" value="2"/>
                    <label for="css_star-3"><i class="fa"></i></label>
                    <input type="radio" id="css_star-3" name="fb" value="3"/>
                    <label for="css_star-4"><i class="fa"></i></label>
                    <input type="radio" id="css_star-4" name="fb" value="4"/>
                    <label for="css_star-5"><i class="fa"></i></label> 
                    <input type="radio" id="css_star-5" name="fb" value="5"/> <br>
                    <input type="submit" name="botao" value="Enviar Avaliação" class="botaoEnviar" />
                  </div>
            </section>
        </main>   


        <footer>
            <p>@Eduardo<br>
            <a href="https://www.instagram.com/duuh.ed/" target="_blank">Contato</a>
            </p>
            <form action="/formulario-contato" method="post" class="form-comentario">
                <div class="comentario-footer">
                    <label for="nome">Nome:</label>
                    <input type="texto" id="nome" name="nome_usuario">
                </div>
                <div class="comentario-footer">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email_usuario">
                </div>
                <div class="comentario-footer">
                    <label for="texto">Texto:</label>
                    <textarea id="texto" name="texto_usuario"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Enviar</button>
                  </div>
            </form>
        </footer>


    </div>

</body>

</html>