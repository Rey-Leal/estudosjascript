<html>

<head>
    <title>04 Perguntas e Respostas</title>
    <link rel="stylesheet" type="text/css" href="content/04style.css">
    <!-- App apenas para uso em enquetes simples -->
</head>

<body>
    <form class="questionario">
        <div class="pergunta">
            <h3>Qual a pergunta 1?</h3>
        </div>
        <div class="resposta">
            <span>Opção 1</span>
            <input type="radio" nome="pergunta" value="correta" />
            <br />
        </div>
        <div class="resposta">
            <span>Opção 2</span>
            <input type="radio" nome="pergunta" value="incorreta" />
            <br />
        </div>
        <div class="resposta">
            <span>Opção 3</span>
            <input type="radio" nome="pergunta" value="incorreta" />
            <br />
        </div>
    </form>

    <form class="questionario">
        <div class="pergunta">
            <h3>Porque a pergunta 2?</h3>
        </div>
        <div class="resposta">
            <span>Opção 1</span>
            <input type="radio" nome="pergunta" value="correta" />
            <br />
        </div>
        <div class="resposta">
            <span>Opção 2</span>
            <input type="radio" nome="pergunta" value="incorreta" />
            <br />
        </div>
        <div class="resposta">
            <span>Opção 3</span>
            <input type="radio" nome="pergunta" value="incorreta" />
            <br />
        </div>
    </form>

    <script>
        var elementos = document.querySelectorAll('[type=radio]');

        for (var i = 0; i < elementos.length; i++) {
            elementos[i].addEventListener('change', (item) => {
                let marcado = item.target.value;
                // Comando que recupera o elemento anterior na pagina no caso seria o <span>
                let elementoAnterior = item.target.previousElementSibling;
                // Comando que recupera o elemento pai no exemplo seria a <div class="resposta">
                let elementoPai = item.target.parentNode;
                // Comando que recupera o elemento Avo (pai do pai) no exemplo seria a <form>
                let elementoAvo = item.target.parentNode.parentNode;

                if (marcado == 'correta') {
                    elementoPai.style.backgroundColor = 'blue';
                    elementoAnterior.style.color = 'white';
                    elementoAvo.style.backgroundColor = 'gray';

                } else if (marcado == 'incorreta') {
                    elementoPai.style.backgroundColor = 'red';
                    elementoAnterior.style.color = 'white';
                    elementoAvo.style.backgroundColor = 'gray';
                }
            })
        }
    </script>
</body>

</html>