<html>

<head>
    <title>02 Block Scopes</title>
</head>

<body>
    <script>
        // Block Scopes {} - O conteudo definido dentro das chaves com tipo let vale apenas para este escopo
        {
            // let para variaveis
            let nome = 'Variável com let pode ser chamada apenas dentro do escopo';

            // let para functions
            let testes = function() {
                console.log('Função com let pode ser chamada apenas dentro do escopo');
            }

            testes(); // retorna valor da funcao
        }

        console.log(nome); // retorna undefined
        testes(); // retorna undefined
    </script>
</body>

</html>