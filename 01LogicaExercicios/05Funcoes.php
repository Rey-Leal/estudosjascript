<html>

<head>
    <title>05 Funções</title>
</head>

<body>
    <script>
        // Declaracao padrao de funcoes
        function teste1() {
            console.log('Chamando a função testes...');
        }

        function teste2(parametro1, parametro2) {
            console.log('Parâmetro 1 da função: ' + parametro1);
            console.log('Parâmetro 2 da função: ' + parametro2);
        }

        function comRetorno(parametro) {
            if (parametro == 1) {
                return 'Rey Leal';
            } else {
                return 'Outros';
            }
        }

        teste1();
        teste2('alpha', 27);

        var texto = comRetorno(1);
        console.log('Retorno da função: ' + texto);

        // Declaracao alternativa via variaveis
        var func = function() {
            console.log('Declaração alternativa via var, let ou const');
        }

        func();
    </script>

    <script>
        // Declaracao com chamada automatica ao final 
        // pode haver somente uma funcao deste modelo por bloco de script
        (function() {
            console.log('Declaração via ()() com chamada automática');
        })();
    </script>
</body>

</html>