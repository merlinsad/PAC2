/*Botão lateral*/
var hamburguer = document.querySelector(".hamburguer");
hamburguer.addEventListener("click", function(){
    document.querySelector(".container").classList.toggle("show-menu");
});

/*Lógica do jogo*/
var jogador_escolha=0
var jogadorPontuacao=0
var computador_escolha=0
var computadorPontuacao=0
var ganhador=-1

function jogar(escolha) {
        
    jogador_escolha = escolha
    computador_escolha = Math.floor((Math.random() * (3-1+1)))+1
    
    if(jogador_escolha == 1 && computador_escolha == 1){
        ganhador=0
    }
    else if(jogador_escolha == 1 && computador_escolha == 2){
        ganhador=2
    }
    else if(jogador_escolha == 1 && computador_escolha == 3){
        ganhador=1
    }
    else if(jogador_escolha == 2 && computador_escolha == 1){
        ganhador=1
    }
    else if(jogador_escolha == 2 && computador_escolha == 2){
        ganhador=0
    }
    else if(jogador_escolha == 2 && computador_escolha == 3){
        ganhador=2
    }
    else if(jogador_escolha == 3 && computador_escolha == 1){
        ganhador=2
    }
    else if(jogador_escolha == 3 && computador_escolha == 2){
        ganhador=1
    }
    else if(jogador_escolha == 3 && computador_escolha == 3){
        ganhador=0
    }
    if(ganhador == 0){
        document.getElementById("mensagens").innerHTML = 'Empate'
    }
    else if(ganhador == 1){
        document.getElementById("mensagens").innerHTML = 'Jogador Ganhou'
        jogadorPontuacao++
    }
    else if(ganhador == 2){
        document.getElementById("mensagens").innerHTML = 'Computador Ganhou'
        computadorPontuacao++    
    }
            
    document.getElementById("jogador_pontos").innerHTML = jogadorPontuacao
    document.getElementById("computador_pontos").innerHTML = computadorPontuacao
}