<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "formulario";
$user = "root";
$pass = "";

// conecta ao banco de dados
$con = mysqli_connect("localhost","root","", "formulario");
// cria a instrução SQL que vai selecionar os dados
// executa a query
$dados = mysqli_query($con, "SELECT nome, usuario, ranking, pontos FROM usuarios");
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);


$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--CSS-->
     <link rel="stylesheet" href="formulario.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!--Icone-->
     <link rel="apple-touch-icon" sizes="180x180" href="img">
     <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
     <link rel="manifest" href="/site.webmanifest">
    <title>Ranking de pontuação</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <main>
        <div class="tabelaRank">
            <table class="table">
                <thead>
                    <caption>Campeões</caption>
                                <tr>
                                    <td class="head">Jogador</td>
                                    <td class="head">Rank</td>
                                    <td class="head">Pontos</td>
                                </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['usuario']."</td>";
                            echo "<td>".$user_data['ranking']."</td>";
                            echo "<td>".$user_data['pontos']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <?php
            // se o número de resultados for maior que zero, mostra os dados
            if($total > 0) {
                // inicia o loop que vai mostrar todos os dados
                do {
                ?>
    
                <?php
                // finaliza o loop que vai mostrar os dados
                }while($linha = mysqli_fetch_assoc($dados));
            // fim do if
            }
            ?>
        </div>
    </main>
    
</body>
</html>