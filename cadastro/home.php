<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>OAB/RS - Página principal</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            line-height: 1.5;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100%;
            
        }

        .btn-danger {
        text-decoration: none;
        margin-left: 75%;
        font-size: 100%;
        }

        .btn-secondary {
        text-decoration: none;
        font-size: 100%;
        }

        nav {
            background-color: #0d507b;
            padding: 30px;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        ul {
            list-style-position: inside;
            padding-left: 0;
            text-align: center;
        }

        li {
            margin: 5px 0;
        }

        footer {
            background-color: #cfcfcf;
            text-align: center;
            padding: 30px;
            width: 100%;
            display: flex;
            grid-template-columns: 1fr auto;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
            bottom: 0;
            position: relative;
            align-items: center;
            height: 308px;
            flex-direction: column;
        }

        .footer-icons {
            text-decoration: none;  
            display: flex;
            align-items: center;  
            cursor: pointer;
            margin: auto 4px;
            border-radius: 50%;
            gap: 20px; 
            justify-content: center;     
        }

        .footer-icons a {
            display: inline-block;
            border-radius: 50%;
            background-color: transparent;
            transition: background-color 0.3s ease-in-out;
            color: #ebebeb;
            margin: 4px;
        }
        
        .instagram:hover {
            background-image: linear-gradient(180deg, #fd5, #ff543e 50%, #c837ab);
        }

        .facebook:hover {
            color: #3b589e;
        }
        
        .linkedin:hover {
            color: #0274b3;
        }

        

        .youtube:hover {
            color: #fe0000;
        }

        .footer-copyright {
            font-size: 14px;
            color: #706e6e;
            position: relative;
            top: 10%;
        }

        *, :after, :before {
            box-sizing: border-box;
        }

        .footer-endereco {
            font-size: 16px;
            color: #706e6e;
            position: relative;
            top: 1%;
        }

        .footer-numero {
            font-size: 25px;
            color: #006896;
            position: relative;
            top: 1.5%;            
        }
        
        .numero {
            margin-right: 13%;
            position: relative;
            top: 13%;
            fill: #028fce;
            
        }

        .endereco {
            margin-right: 38%;
            position: relative;
            top: 9.3%;
            fill: #028fce;
           
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="imagens/Screenshot_20240902-091925_Google Play Store.jpg" width="100" height="70">
            </a>
            <a href="login.php" class="btn btn-danger">Login</a>
            <a href="formulario.php" class="btn btn-secondary">Cadastre-se</a>
        </div>
    </nav>

    <main>
        <header>
            <h1>Bem-vindo à OAB FAKE</h1>
        </header>

        <br><br>

        <section>
            <h2>Serviços</h2>
            <ul>
                <li>Sistema de cadastro de usuários</li>
                <li>Lista de usuários cadastrados</li>
                <li>Edição, exclusão e busca na lista de usuários</li>
            </ul>
        </section>
    </main>

    <footer class="footer">
   
        <div class="numero">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16.283 16.284">                                                    
            <path class="a" d="M15.819,11.507,12.257,9.98a.763.763,0,0,0-.891.219L9.789,12.127A11.789,11.789,0,0,1,4.154,6.492L6.081,4.914A.761.761,0,0,0,6.3,4.024L4.774.462A.768.768,0,0,0,3.9.02L.592.783A.763.763,0,0,0,0,1.527,14.755,14.755,0,0,0,14.757,16.284a.763.763,0,0,0,.744-.592l.763-3.308A.773.773,0,0,0,15.819,11.507Z" transform="translate(0 0)"></path>
        </svg>
        </div>
        <p class="footer-numero">62 4398 2911</p>

        <div class="endereco">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12.46 17.801">
            <path class="a" d="M13.73,3A6.226,6.226,0,0,0,7.5,9.23c0,4.673,6.23,11.57,6.23,11.57s6.23-6.9,6.23-11.57A6.226,6.226,0,0,0,13.73,3Zm0,8.455A2.225,2.225,0,1,1,15.955,9.23,2.226,2.226,0,0,1,13.73,11.455Z" transform="translate(-7.5 -3)"></path>
        </svg>
        </div>
        <p class="footer-endereco">Svb Xbtijohupo Mvja, 2221 - Dfousp - CEP 01121-571 - Porto Alegre - RS</p>

            <div class="footer-icons"> 
            <a class="facebook" href="https://www.facebook.com/oabrs/"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"  class="bi-facebook bi" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
            </a>  
            
            <a class="linkedin" href="https://www.linkedin.com/company/oabrs/">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                </svg>
            </a>

            <a class="instagram" href="https://www.instagram.com/oabrs/">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
            </a>
        
            <a class="youtube" href="https://www.youtube.com/user/TVOABRS/videos">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                 </svg>
             </a>
             </div>

        
        <div class="footer-copyright">     
        <span>© Copyright 2024 | Desenvolvido por TIC OAB/RS FAKE</span>
        <span><p class="">Problemas com o site? Não Contate a TI da OAB/RS FAKE - informatica@oabrsfake.org.br</p></span>
        </div>

    </footer>
</body>
</html>