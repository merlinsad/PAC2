
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Icone-->
    <link rel="apple-touch-icon" sizes="180x180" href="img">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>TIC-TAC-TOE</title>
</head>
<body>
    <div class="container">
            <div class="hamburguer">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
                <span>fechar</span>
            </div>
        <header id="home">
            <div class="img-wrapper">
                <img src="img/pankaj-patel-u2Ru4QBXA5Q-unsplash.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Bem-vindo ao Jogo <span style="color:aquamarine;">TIC-TAC-TOE</span></h1>
                <p>Gabriel <span style="color:aqua;">Furquim</span> da Silva, Gustavo <span style="color:aqua;">Lipinski</span><br> e <span style="color:aqua;">Vini</span>cius Vicenzo Padilha.</p>
                <a href="login.php" class="menu-link"><button>Login</button></a>
                <a href="inserirCadastro.php" class="menu-link"><button>Cadastrar</button></a>
                <a href="index.php#principal" class="menu-link"><button>Jogar sem Login</button></a>
            </div>
        </header>

        <div class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="ranking.php" class="menu-link">Rank</a></li>
                    <li class="menu-item"><a href="#contatos" class="menu-link">Alunos</a></li>
                </ul>
            </nav>
            <div class="social">
                <img src="img/android-chrome-192x192.png" >
            </div>
        </div>

        <section id="principal">
            <h1 id="titulo">Pedra, papel ou tesoura</h1>
            <div id="placar">
                <div id="jogador">
                    <h2 id="jogador_nome">Jogador</h2>
                    <span id="jogador_pontos">0</span>
                    <ul id="jogador_escolha">
                        <li><a id="jogador_escolha_1" onclick="jogar(1)"><img src="img/pedra-removebg-preview.png"></a></li>
                        <li><a id="jogador_escolha_2" onclick="jogar(2)"><img src="img/papel-removebg-preview.png"></a></li>
                        <li><a id="jogador_escolha_3" onclick="jogar(3)"><img src="img/tesoura-removebg-preview.png"></a></li>
                    </ul>
                </div>
                <div id="versus"><h1 id="oponente">VS</h1></div>
                    <div id="computador">
                        <h2 id="computador_nome">computador</h2>
                        <span id="computador_pontos">0</span>
                        <ul id="computador_escolha">
                            <li><a id="computador_escolha_1"><img src="img/pedra-removebg-preview.png"></a></li>
                            <li><a id="computador_escolha_2"><img src="img/papel-removebg-preview.png"></a></li>
                            <li><a id="computador_escolha_3"><img src="img/tesoura-removebg-preview.png"></a></li>
                        </ul>
                    </div>
            </div>
            <div id="mensagens"><h1>Ganhador</h1></div>
        </section>

        <section class="sessao-contato">
            <div class="contato-wrapper">
                <div class="contato-left"></div>
                <div class="contato-right">
                    <h1>Participações</h1>
                    <div class="alunos" id="contatos">
                        <img src="img/eufoto.jpg">
                            <h3>Gabriel Furquim da Silva - <span style="color: #9F8170;">Front-End</span>(HTML, CSS)</h3>
                        </img>
                        <img src="img/gustavofoto.jpeg">
                            <h3>Gustavo Lipinski - <span style="color: #9F8170;">Design </span> e Layout</h3>
                        </img>
                        <img src="img/vinifoto.jpeg">
                            <h3>Vinícius Vicenzo Padilha - <span style="color: #9F8170;">Back-End</span>(PHP, Banco de Dados e API Rest)</h3>
                        </img>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-content">
                <p>Copyright &copy; 2021, Team Mavericks - Copia não comédia!</p>
            </div>
        </footer>
        <a href="#home" id="link-topo">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
        
</body>
<script src="script.js"></script>
</html>