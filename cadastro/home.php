<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: #ecf0f1;
        text-align: center;
        
    }
    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.9);
        padding: 30px;
        border-radius: 10px;
    }
    a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
    }
    a:hover{
        background-color: dodgerblue;
    }
    h1 {
        color: white;
        
    }
  
</style>

</head>
<body>

<nav class="navbar navbar-light" style="background-color: #003366;padding: 10px;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:white; border:none; cursor: pointer;" href="home.php">Nome da Empresa</a>    
            <h1>Seja Bem-Vindo ao Nome da Empresa</h1>
        </div>
    </nav>
    <br>

    
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>

</body>
</html>