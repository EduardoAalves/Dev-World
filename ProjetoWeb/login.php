<?php 

    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_GET['a']) and ($_GET['a'] == 1))
    {
        session_destroy();
    }
    if(isset($_POST) and !empty($_POST)){
        $email = $_POST['email'];
        $password = ($_POST['password']);

        $conn = new mysqli('localhost', 'root', '', 'dev world','3308');
        $conn->set_charset("utf8");

        $sql = "SELECT * FROM user WHERE email='$email' and password='$password' ";
        $exe = $conn->query($sql);
        if($exe->num_rows > 0){
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }else{
            echo "Email ou senha inválida!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

    <title>Login</title>
</head>

<body>
    <div id="login-container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
            <label for="">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <a href="#" id="forgot-pass">Esqueceu sua senha?</a>
            <input type="submit" value="Login"></button>

        <?php 
            if(isset($erro)){
                echo "Erro de Login";
            }
        
        ?>
        </form>

        <div id="social-container">
            <p>Ou entre pelas redes sociais</p>
            <a href="https://www.facebook.com/carlos.eduardo.121772/" target="_blank"> </i> <i
                    class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/carlos-eduardo-9337b6205/" target="_blank"><i
                    class="fa fa-linkedin"></i></a>
        </div>
        <div id="register-container">
            <p>Ainda nao tem conta?</p>
            <a href="cadastro.php">Registrar</a>
        </div>
    </div>
    

</html>