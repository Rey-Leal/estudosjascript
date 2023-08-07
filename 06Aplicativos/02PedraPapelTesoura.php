<html>

<head>
    <title>02 Pedra, Papel ou Tesoura</title>
    <link rel="stylesheet" type="text/css" href="content/02style.css">
</head>

<body>
    <header>
        <h2 class="titulo">Pedra, Papel ou Tesoura</h2>
        <div class="placar">
            <h3>Hora do jogo!</h3>
        </div>
    </header>

    <div class="align">
        <div class="player-options">
            <div><img opt="pedra" src="content/images/02pedra.png"></div>
            <div><img opt="papel" src="content/images/02papel.png"></div>
            <div><img opt="tesoura" src="content/images/02tesoura.png"></div>
        </div>

        <div class="enemy-options">
            <div><img opt="pedra" src="content/images/02pedra.png"></div>
            <div><img opt="papel" src="content/images/02papel.png"></div>
            <div><img opt="tesoura" src="content/images/02tesoura.png"></div>
        </div>
    </div>

    <script>
        var players = document.querySelectorAll('.player-options div > img');
        var inimigos = document.querySelectorAll('.enemy-options div > img');
        var playerOpt = '';
        var inimigoOpt = '';

        // Esconde players
        function resetaOpacidade() {
            for (var i = 0; i < players.length; i++) {
                players[i].style.opacity = 0.3;
            }
            for (var i = 0; i < inimigos.length; i++) {
                inimigos[i].style.opacity = 0.3;
            }
        }

        // Valida vencedor do jogo
        function validarVitoria() {
            let placar = document.querySelector(".placar");
            let resultado = '';

            if (playerOpt == 'pedra') {
                if (inimigoOpt == 'pedra') {
                    resultado = 'Empate';

                } else if (inimigoOpt == 'papel') {
                    resultado = 'Perdeu!';
                } else if (inimigoOpt == 'tesoura') {
                    resultado = 'Ganhou!';
                }
            }

            if (playerOpt == 'papel') {
                if (inimigoOpt == 'pedra') {
                    resultado = 'Ganhou!';
                } else if (inimigoOpt == 'papel') {
                    resultado = 'Empate';
                } else if (inimigoOpt == 'tesoura') {
                    resultado = 'Perdeu!';
                }
            }

            if (playerOpt == 'tesoura') {
                if (inimigoOpt == 'pedra') {
                    resultado = 'Perdeu!';
                } else if (inimigoOpt == 'papel') {
                    resultado = 'Ganhou!';
                } else if (inimigoOpt == 'tesoura') {
                    resultado = 'Empate';
                }
            }

            placar.innerHTML = `
            <h3>` + playerOpt + ` X ` + inimigoOpt + ` = ` + resultado + `</h3>
            `;
        }

        // Jogada inimiga
        function inimigoJogar() {
            let rand = Math.floor(Math.random() * 3);

            for (var i = 0; i < inimigos.length; i++) {
                if (i == rand) {
                    inimigos[i].style.opacity = 1;
                    inimigoOpt = inimigos[i].getAttribute('opt');
                }
            }
            validarVitoria(inimigoOpt);
        }

        // Seleciona elemento clicado
        for (var i = 0; i < players.length; i++) {
            players[i].addEventListener('click', (t) => {
                resetaOpacidade();
                t.target.style.opacity = 1;
                playerOpt = t.target.getAttribute('opt');
                inimigoJogar();
            });
        }
    </script>
</body>

</html>