<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: #ecf0f1;
        }
        
        .outra_div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        navbar-brand  {
        text-decoration: none;
        border: 3px solid dodgerblue;
        border: none;
        }

        a:hover{
            background-color: dodgerblue;
            border-radius: 200px;
            padding: 10px;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-light" style="background-color: #003366;padding: 10px;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:white;  cursor: pointer;" href="home.php">Nome da Empresa</a>
                <a href="home.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    <div class="outra_div">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br> <br>
        <input type="password" name="senha" placeholder="Senha">
        <br> <br>
        <input class="inputSubmit" type="submit" name="submit">
    </div>
    </form>
    
</body>
</html>