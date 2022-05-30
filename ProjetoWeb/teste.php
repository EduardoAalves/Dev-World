<?php 
                        
require_once 'config.php';
require_once 'crud.php';

$crud = new Crud(DB_HOST,DB_PORT,DB_NAME,DB_USER,DB_PASSWORD,DB_CHAR);
$array = [];
$select = $crud->select('vw_rank_user', $array);
$select->fetch_assoc();
                        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="rank">
        <div class="rank-user">
        <?php 
            foreach($select as $atributo)
            {
                echo $atributo['email'];
                echo $atributo['coins'];
                echo "<br>";
            }
                    
         ?>
        </div>
</section>

</body>
</html>