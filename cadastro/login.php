<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>OAB/RS - Login</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;   
        }
        
        .outra_div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            border-radius: 15px;
            color: white;
            height: 55%;
            width: 25%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9);

        }
        fieldset {
            border: 3px solid rgb(25, 205, 275);
            padding: 1rem;
            
        }
        legend {
            border: 3px solid;
            padding: 15px;
            text-align: center;
            background-image: linear-gradient(to right, rgba(8, 81, 122, 255), rgb(25, 205, 275));
            border-radius: 8px;
            width: 100%;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
        }

        .inputSubmit {
            background-image: linear-gradient(to right, rgba(8, 81, 122, 255), rgb(25, 205, 275));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        .inputSubmit:hover {
            background: deepskyblue;
        }

        .navbar-brand  {
            border: none;
            color:white;  
            cursor: pointer;
            margin-left: 1.2%;
        }
        nav {
            background-color: #0d507b;
            padding: 10px;
        }


      
    </style>

</head>
<body>
<nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="imagens/Screenshot_20240902-091925_Google Play Store.jpg" width="100" height="70"></a>
                <a href="home.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    <div class="outra_div">
        <fieldset>
            <legend><b>Login</b></legend>
            <br><br>
            <form action="testLogin.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <br> <br>
                <input type="password" name="senha" placeholder="Senha" required>
                <br> <br>
                <input class="inputSubmit" type="submit" name="submit">
        </fieldset>
            </div>
    </form>
    
</body>
</html>