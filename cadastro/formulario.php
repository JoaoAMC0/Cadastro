<?php



include("config.php");

    if(isset($_POST["submit"]))
    {
        
       // print_r('nome: ' .$_POST["nome"]);
       // print_r('<br>');
       // print_r('email: '  .$_POST["email"]);
       // print_r('<br>');
       // print_r('telefone: ' .$_POST["telefone"]);
       // print_r('<br>');
       // print_r('sexo: ' .$_POST["genero"]);
       // print_r('<br>');
       // print_r('data_nasc: ' .$_POST["data_nascimento"]);
       // print_r("<br>");
       // print_r("cidade".$_POST["cidade"]);
       // print_r("<br>");
       // print_r("estado".$_POST["estado"]);
       // print_r("<br>");
       // print_r("endereco".$_POST["endereco"]);
     

        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["genero"];
        $data_nasc = $_POST["data_nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)
        VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
    }


?>


   

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulário</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: #ecf0f1;
        }
        .box {
            color: white;
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba( 0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            height: 126%;
                
        }
        fieldset {
            border: 3px solid dodgerblue;
            padding: 0.5rem;
        }
        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .input-box {
            position: relative;
        }
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
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
            <a class="navbar-brand" style="color:white; cursor: pointer;" href="home.php">Nome da Empresa</a>
                <a href="home.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    
    <div class="box">
        <form action="formulario.php" method="POST">
            <Fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br><br>
            <div class="input-box">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br><br>
            <div class="input-box">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="input-box">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="input-box">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br><br>
            <div class="input-box">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="input-box">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="input-box">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>
    </div>
    
</body>
</html>