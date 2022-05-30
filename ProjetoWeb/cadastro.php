<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(isset($_POST) and !empty($_POST)){
        $conn = new mysqli('localhost', 'root', '', 'Dev World', '3308');
        $conn->set_charset("utf8");
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $coins = 0;


        $sql_1 = "SELECT * FROM user WHERE email='$email'";
        $exe_1 = $conn->query($sql_1);
        if($exe_1->num_rows > 0){
            echo "Já existe";
        }else{
            $sql_2 = "INSERT INTO user(name, last_name, email, password, coins)
                                    VALUES('$name','$last_name','$email','$password', '$coins')";
            $exe_2 = $conn->query($sql_2);
            $_SESSION['msg'] = "Registo cadastrado com sucesso!";
            //header('Location: login.php');
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
       

    <title>Cadastrar</title>
</head>

<body>
    <div id="login-container">
        <h1>Cadastro</h1>
        <form action="" method="post">
            <label for="">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome" autocomplete="off">
            <label for="">Sobrenome</label>
            <input type="text" name="last_name" id="last_name" placeholder="Digite seu sobrenome" autocomplete="off">
            <label for="">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
            <label for="">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <input type="submit" value="Cadastrar-se">
       
            <div id="social-container">
              <p>Ou entre pelas redes sociais</p>
              <a href="https://www.facebook.com/carlos.eduardo.121772/" target="_blank"> </i> <i
                    class="fa fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/carlos-eduardo-9337b6205/" target="_blank"><i
                    class="fa fa-linkedin"></i></a>
            </div>
        </form>
    </div>
    

</html>