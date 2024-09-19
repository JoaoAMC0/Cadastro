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

    <title>OAB/RS - Cadastro</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
           
        }
        .box {
            color: white;
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba( 0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            height: 135%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9);

                
        }
        fieldset {
            border: 3px solid rgb(25, 205, 275);
            padding: 0.5rem;
            border-radius: 8px;
        }
        legend {
            border: 1px solid;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(to right, rgba(8, 81, 122, 255), rgb(25, 205, 275));
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
            font-weight: bold;
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
            background-image: linear-gradient(to right, rgba(8, 81, 122, 255), rgb(25, 205, 275));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover {
            background: deepskyblue;
        }
        .navbar-brand  {
            text-decoration: none;
            border: 3px solid #2596be;
            border: none;
            color:white;  
            cursor: pointer;
            margin-left: 1.2%;
        }

        nav {
            background-color: #0d507b;
            padding: 10px;
        }
        
        .js-example-basic-single {
          padding: 85px;  
          display: block;
        }
       
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    
<nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="imagens/Screenshot_20240902-091925_Google Play Store.jpg" width="100" height="70"></a>
                <a href="home.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    
    <div class="box">
        <form action="formulario.php" method="POST">
            <Fieldset>
            <legend><b>Cadastro de Clientes</b></legend>
            <br><br>
            <div class="input-box">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</b></label>
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
                <input type="text" name="telefone" id="telefone" class="inputUser" maxlength="15" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p><b>Sexo:</b></p>
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
                <label for="estado"><b>Estado:</b></label>
                <select name="estado" id="estado" class="js-example-basic-single" required>
                <option value="">Selecione um estado</option>
                <option value="RS">Rio Grande do Sul</option>
                </select>
            </div>
            <br><br>
            <div class="input-box">
                <label for="cidade"><b>Cidade:</b></label>
                <select name="cidade" id="cidade" class="js-example-basic-single" required>
                <option value="">Selecione uma cidade</option>
                </select>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // Inicializa o Select2 para os selects
            $('.js-example-basic-single').select2({
                placeholder: "Selecione uma opção",
                allowClear: true
            });


            // Dados das cidades para o Rio Grande do Sul
            const cidadesPorEstado = {
                'RS': [
                    'Porto Alegre', 'Aceguá', 'Água Santa', 'Agudo', 'Ajuricaba', 'Alegrete', 'Alegria', 'Almirante Tamandaré do Sul',
                    'Alpestre', 'Alvorada', 'Amaral Ferrador', 'Ametista do Sul', 'André da Rocha', 'Anta Gorda',
                    'Antônio Prado', 'Arambaré', 'Araricá', 'Aratiba', 'Arroio do Meio', 'Arroio do Sal', 'Arroio do Tigre',
                    'Arvorezinha', 'Augusto Pestana', 'Bagé', 'Bandeira do Sul', 'Barão', 'Barão de Cotegipe',
                    'Barão do Triunfo', 'Barra do Guarita', 'Barra do Quaraí', 'Barra do Ribeiro', 'Barra do Rio Azul',
                    'Barra Funda', 'Barracão', 'Bento Gonçalves', 'Boa Vista das Missões', 'Boa Vista do Buricá',
                    'Boa Vista do Cadeado', 'Boa Vista do Sul', 'Bom Jesus', 'Bom Princípio', 'Bom Retiro do Sul',
                    'Boqueirão do Leão', 'Bossoroca', 'Bozano', 'Braga', 'Brochier', 'Butiá', 'Caçapava do Sul',
                    'Cacequi', 'Cachoeira do Sul', 'Cachoeirinha', 'Cadorna', 'Candelária', 'Capão da Canoa',
                    'Capão do Leão', 'Capela de Santana', 'Capitão', 'Carazinho', 'Carlos Barbosa', 'Carlos Gomes',
                    'Casca', 'Caseiros', 'Catuípe', 'Caxias do Sul', 'Centenário', 'Cerrito', 'Chapada', 'Charqueadas',
                    'Charrua', 'Chiapeta', 'Cipriano', 'Colinas', 'Colorado', 'Comandante Máximo', 'Conceição do Sul',
                    'Condor', 'Constantina', 'Coqueiros do Sul', 'Coronel Barros', 'Coronel Bicaco', 'Coronel Pilar',
                    'Cotiporã', 'Coxilha', 'Crissiumal', 'Cristal', 'Cristal do Sul', 'Cruz Alta', 'Cruzaltense',
                    'Cruz do Sul', 'Curumim', 'David Canabarro', 'Derrubadas', 'Dezesseis de Novembro',
                    'Dilermando de Aguiar', 'Divisa Alegre', 'Dois Irmãos', 'Dois Irmãos das Missões', 'Dois Lajeados',
                    'Dom Feliciano', 'Dom Pedrito', 'Dona Francisca', 'Doutor Maurício Cardoso', 'Doutor Ricardo',
                    'Eldorado do Sul', 'Encantado', 'Encruzilhada do Sul', 'Engenho Velho', 'Esmeralda', 'Esperança do Sul',
                    'Espumoso', 'Estância Velha', 'Estância Nova', 'Esteio', 'Estrela', 'Estrela Velha', 'Eusébio de Castro',
                    'Faxinal do Soturno', 'Faxinalzinho', 'Feliz', 'Flores da Cunha', 'Floriano Peixoto',
                    'Fontoura Xavier', 'Formigueiro', 'Forquetinha', 'Frederico Westphalen', 'Garibaldi', 'Garruchos',
                    'Gaurama', 'General Câmara', 'Getúlio Vargas', 'Glorinha', 'Gramado', 'Gramado dos Loureiros',
                    'Gravataí', 'Guaporé', 'Harmonia', 'Herval', 'Herveiras', 'Horizontina', 'Hulha Negra', 'Ibiraiaras',
                    'Ibirapuitã', 'Ibirubá', 'Igrejinha', 'Ijuí', 'Ilópolis', 'Imbé', 'Imigrante', 'Inhacorá', 'Inhapi',
                    'Ipê', 'Ipiranga do Sul', 'Iraí', 'Itacurubi', 'Itaqui', 'Itati', 'Itaipulândia', 'Itatiá', 'Ivoti',
                    'Jaboticaba', 'Jacutinga', 'Jaguarão', 'Jaguaré', 'Jaguari', 'Jandaia do Sul', 'Jari', 'Jóia',
                    'Júlio de Castilhos', 'Lagoa Bonita', 'Lagoa Vermelha', 'Lajeado', 'Lavras do Sul', 'Liberato Salzano',
                    'Linha Nova', 'Londrina', 'Luiz Alves', 'Machadinho', 'Mampituba', 'Manoel Viana', 'Maquiné',
                    'Marau', 'Marcelino Ramos', 'Mariana Pimentel', 'Maricá', 'Mata', 'Mato Castelhano', 'Mato Leitão',
                    'Mato Queimado', 'Maximiliano de Almeida', 'Minas do Leão', 'Miraguaí', 'Monte Alegre dos Campos',
                    'Monte Belo do Sul', 'Montenegro', 'Morrinhos do Sul', 'Mostardas', 'Muita Água', 'Muliterno',
                    'Nicolau Vergueiro', 'Nonoai', 'Nova Araçá', 'Nova Bassano', 'Nova Boa Vista', 'Nova Bréscia',
                    'Nova Candelária', 'Nova Esperança do Sul', 'Nova Hartz', 'Nova Palma', 'Nova Petrópolis',
                    'Nova Prata', 'Nova Ramada', 'Nova Santa Rita', 'Novo Hamburgo', 'Novo Machado', 'Novo São Joaquim',
                    'Osório', 'Paim Filho', 'Palmares do Sul', 'Palmeira das Missões', 'Palmeira do Sul', 'Panambi',
                    'Pantano Grande', 'Paraí', 'Parai', 'Parobé', 'Passo Fundo', 'Passo do Sobrado', 'Pedro Osório',
                    'Pejuçara', 'Peritiba', 'Pinhal', 'Pinhal da Serra', 'Pinhal Grande', 'Pinheirinho do Vale',
                    'Pinheiro Machado', 'Pirapó', 'Piratini', 'Planalto', 'Poço das Antas', 'Ponto Novo', 'Portão',
                    'Porto Lucena', 'Porto Mauá', 'Porto Vera Cruz', 'Porto Xavier', 'Presidente Lucena',
                    'Progresso', 'Protetora', 'Putinga', 'Quaraí', 'Quatro Irmãos', 'Quevedos', 'Quinze de Novembro',
                    'Restinga Seca', 'Rio dos Índios', 'Rio Grande', 'Rio Pardo', 'Riozinho', 'Roca Sales', 'Rodeio Bonito',
                    'Rolante', 'Rolador', 'Ronda Alta', 'Rondinha', 'Rosário do Sul', 'Sagrada Família', 'Saldanha Marinho',
                    'Salto do Jacuí', 'Salvador das Missões', 'Salvador do Sul', 'Sananduva', 'Santa Bárbara do Sul',
                    'Santa Cecília do Sul', 'Santa Clara do Sul', 'Santa Cruz do Sul', 'Santa Maria', 'Santa Maria do Herval',
                    'Santa Rita do Sul', 'Santa Rosa', 'Santa Tereza', 'Santa Vitória do Palmar', 'Santana da Boa Vista',
                    'Santana do Livramento', 'Santiago', 'Santo Ângelo', 'Santo Antônio da Patrulha', 'Santo Antônio do Palma',
                    'Santo Augusto', 'Santo Cristo', 'Santo Expedito do Sul', 'São Borja', 'São Domingos do Sul',
                    'São Francisco de Assis', 'São Gabriel', 'São Jerônimo', 'São João do Polêsine', 'São José do Norte',
                    'São José do Ouro', 'São José do Sul', 'São Leopoldo', 'São Lourenço do Sul', 'São Marcos',
                    'São Martinho', 'São Miguel das Missões', 'São Nicolau', 'São Pedro do Sul', 'São Sebastião do Cai',
                    'São Sepé', 'São Valentim', 'São Valentim do Sul', 'São Vicente do Sul', 'Sarandi', 'Segredo',
                    'Serafina Corrêa', 'Sério', 'Sertão', 'Silveira Martins', 'Sinimbu', 'Soledade', 'Tabaí',
                    'Tapejara', 'Tapera', 'Tapes', 'Taquara', 'Taquaruçu do Sul', 'Tavares', 'Tenente Portela',
                    'Terra de Areia', 'Teutônia', 'Toropi', 'Torres', 'Tramandaí', 'Travesseiro', 'Três Arroios',
                    'Três Cachoeiras', 'Três Coroas', 'Três de Maio', 'Três Forquilhas', 'Três Palmeiras', 'Três Passos',
                    'Três Pequenos', 'Três Rios do Sul', 'Trindade do Sul', 'Triunfo', 'Tucunduva', 'Tupanciretã',
                    'Tupandi', 'Tuparetama', 'Turuçu', 'Unistalda', 'Uruguaiana', 'Vacaria', 'Vale do Sol',
                    'Vale Real', 'Vale Verde', 'Vanini', 'Venâncio Aires', 'Veranópolis', 'Vespasiano Correa',
                    'Viamão', 'Vicente Dutra', 'Victor Graeff', 'Vila Flores', 'Vila Maria', 'Vila Nova do Sul', 'Vila Pratos',
                    'Vista Alegre', 'Vista Alegre do Prata', 'Vista Gaúcha', 'Xangri-Lá', 'Xaxim'
                ]
            };

            $('#estado').on('change', function() {
                const estadoSelecionado = $(this).val();
                const cidadeSelect = $('#cidade');

                cidadeSelect.empty(); // Limpa as opções anteriores
                cidadeSelect.append(new Option('Selecione uma cidade', ''));

                if (estadoSelecionado === 'RS') {
                    const cidades = cidadesPorEstado[estadoSelecionado];
                    cidadeSelect.prop('disabled', false);

                    // Adiciona as opções de cidades
                    cidades.forEach(cidade => {
                        cidadeSelect.append(new Option(cidade, cidade));
                    });

                    // Reaplica o Select2 ao select de cidades
                    cidadeSelect.select2({
                        placeholder: "Selecione uma cidade",
                        allowClear: true
                    });
                } else {
                    cidadeSelect.prop('disabled', true);
                }
            });
        });
    </script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataNascimentoInput = document.getElementById('data_nascimento');
            
            // Calcula a data máxima (18 anos atrás)
            const hoje = new Date();
            const dataMaxima = new Date(hoje.getFullYear() - 18, hoje.getMonth(), hoje.getDate());
            const maxDateStr = dataMaxima.toISOString().split('T')[0];

            // Calcula a data mínima (exemplo: 1900-01-01)
            const dataMinima = new Date(1900, 0, 1);
            const minDateStr = dataMinima.toISOString().split('T')[0];

            // Configura os atributos min e max no campo de data
            dataNascimentoInput.setAttribute('max', maxDateStr);
            dataNascimentoInput.setAttribute('min', minDateStr);
        });
    </script>

<Script>
        const telefoneInput = document.getElementById('telefone');

        telefoneInput.addEventListener('input', function(e) {
            let input = e.target.value;

            input = input.replace(/\D/g, '');

            input = input.replace(/^(\d{2})(\d)/g, '($1) $2');
            input = input.replace(/(\d{5})(\d)/, '$1-$2');

            e.target.value = input;
        });
    </Script>
</html>