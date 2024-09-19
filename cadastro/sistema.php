<?php
    include_once('config.php');
    session_start();
    
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

    $result = $conexao->query($slq);    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>OAB/RS - Lista de Usuários</title>
    <Style>
           body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .table-bg{
            background-color: rgba(0, 0, 0, 0.9);
            border-radius: 15px 15px 0 0;
        }   
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
            
        }

        .bi-person-circle {
            color: white;
            margin-left: 940%;
            cursor: pointer;
        }
        nav {
            background-color: #0d507b;
        }
        .navbar-brand {
            border: none;
            color:white;  
            cursor: pointer;
            margin-left: 1.2%;
        }
        
    </Style>
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="imagens/Screenshot_20240902-091925_Google Play Store.jpg" width="100" height="70"></a>
            <a href="">    
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
                <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
   
    <br>
    <div class="box-search">
        <input type="search" class="from-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
    <table class="table text-white table-bg">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Senha</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Endereço</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
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
                <a class= 'btn bt-sm btn-primary' href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                    </svg>
                </a>
                <a class= 'btn bt-sm btn-danger' href='delete.php?id=$user_data[id]'>
                   <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                      <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                    </svg>
                </a>

                </td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>

<script>
    var search = document.getElementById('pesquisar');
    
    search.addEventListener("keydown", function(event){
        if (event.key === "Enter")
    {
        searchData();
    }
    });
    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>

</html>