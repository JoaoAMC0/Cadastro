<?php

 session_start();
 
 $logado = $_SESSION['email'];
 
 if(!empty($_GET['id']))
 {
 
     include_once('config.php');
     
         
         $id = $_GET['id'];
 
         $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
 
         $result = $conexao->query($sqlSelect);
 
         if($result->num_rows > 0)
         {
             while($user_data = mysqli_fetch_assoc($result))
             {
         
             $nome = $user_data['nome'];
             $senha = $user_data['senha'];
             $email = $user_data['email'];
             $telefone = $user_data['telefone'];
             $sexo = $user_data['sexo'];
             $data_nasc = $user_data['data_nasc'];
             $cidade = $user_data['cidade'];
             $estado = $user_data['estado'];
             $endereco = $user_data['endereco'];
         }
     }
         }
        
         if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        if(!empty($_GET['search']))
        {
            $data = $_GET['search'];
            $slq = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or telefone LIKE '%$data%' or cidade LIKE '%$data%' or estado LIKE '%$data%' or endereco LIKE '%$data%' or sexo LIKE '%$data%' or data_nasc LIKE '%$data%' ORDER BY id";
        }
        else
        {
            $slq = "SELECT * FROM usuarios ORDER BY id";
        }
    
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Conta do Usuários</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;            
            
        }    

    </style>
</head>
<body>
    <?php
        echo "<h1>Bem-vindo <u>$logado</u></h1>";
    ?>

<?php
            while($user_data= mysqli_fetch_assoc($result))
            {
            echo "<tr>";
            echo "<td>" .$user_data['id']."</td>";
            echo "<td>" .$user_data['nome']."</td>";
            echo "<td>" .$user_data['senha']."</td>";
            echo "<td>" .$user_data['email']."</td>";
            echo "<td>" .$user_data['telefone']."</td>";
            echo "<td>" .$user_data['sexo']."</td>";
            echo "<td>" .$user_data['data_nasc']."</td>";
            echo "<td>" .$user_data['cidade']."</td>";
            echo "<td>" .$user_data['estado']."</td>";
            echo "<td>" .$user_data['endereco']."</td>";
            echo "<td>
               </td>";
            echo "</tr>";
            }
            ?>
</body>
</html>