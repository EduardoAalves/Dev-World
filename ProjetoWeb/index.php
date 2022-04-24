<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/du.ico.png" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
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
                <li><a href="login.php">Sair</a> </li>
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
            <section class="module parallax parallax-1" id="intro">
                <h1 id="html">Introdução ao HTML</h1>
            </section>

            <section class="module content">
                <div class="container">
                    <h2>HTML</h2>
                    <p>
                    Um desenvolvedor front-end precisava dominar só o HTML, o CSS e JavaScript para ter uma boa 
                    colocação no mercado. Claramente, outras coisas eram incluídas nesse "só", como por exemplo: 
                    responsividade, semântica do HTML, acessibilidade, performance entre outras. Mas tudo girava 
                    em torno das três tecnologias principais.
                    </p>    
                    <p>
                    A web mudou. Entraram outras habilidades como versionamento de arquivos, automatização de 
                    tarefas, pré-processadores, bibliotecas, frameworks, NodeJS e gerenciador de pacotes, para 
                    citar alguns. Mas a base de tudo ainda gira em torno das três tecnologias principais.
                    </p>
                    <p>
                    sso quer dizer que não importa a época ou a tecnologia, a base sempre vai ser a mesma. Então 
                    antes de pular para o tão famoso framework, temos que aprender a base dele para realmente 
                    entender o que está por trás dos panos. Sei que encontrar material de qualidade e com uma 
                    linguagem simples para quem está começando não é uma tarefa muito fácil. Com essa premissa em 
                    mente, criei esse e-book onde irei ensinar alguns fundamentos básicos do front-end
                    </p>
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
                    <p>
                        CSS é a sigla para o termo em inglês Cascading Style Sheets que, traduzido para o português,
                        significa Folha de Estilo em Cascatas. O CSS é fácil de aprender e entender e é facilmente
                        utilizado com as linguagens de marcação HTML ou XHTML.
                    </p>
                    <p>
                        CSS é chamado de linguagem Cascading Style Sheet e é usado para estilizar elementos escritos em
                        uma linguagem de marcação como HTML. O CSS separa o conteúdo da representação visual do site.
                        Pense na decoração da sua página. Utilizando o CSS é possível alterar a cor do texto e do fundo,
                        fonte e espaçamento entre parágrafos. Também pode criar tabelas, usar variações de layouts,
                        ajustar imagens para suas respectivas telas e assim por diante.
                    </p>
                    <p>
                        CSS foi desenvolvido pelo W3C (World Wide Web Consortium) em 1996, por uma razão bem simples. O
                        HTML não foi projetado para ter tags que ajudariam a formatar a página. Você deveria apenas
                        escrever a marcação para o site.
                    </p>
                    <p>
                        Tags como <font> foram introduzidas na versão 3.2 do HTML e causaram muitos problemas para os
                            desenvolvedores. Como os sites tinham diferentes fontes, cores e estilos, era um processo
                            longo, doloroso e caro para reescrever o código. Assim, o CSS foi criado pelo W3C para
                            resolver este problema.
                    </p>
                    <p>A relação entre HTML e CSS é bem forte. Como o HTML é uma linguagem de marcação (o alicerce de um
                        site) e o CSS é focado no estilo (toda a estética de um site), eles andam juntos.</p>
                    <p>
                        CSS não é tecnicamente uma necessidade, mas provavelmente você não gostaria de olhar para um
                        site que usa apenas HTML, pois isso pareceria completamente abandonado.
                    </p>
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