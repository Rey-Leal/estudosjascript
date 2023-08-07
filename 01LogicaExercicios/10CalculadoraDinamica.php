<html>

<head>
    <title>10 Exercício - Cálculadora Dinâmica</title>
</head>

<body>
    <script>
        var numeroInicial = prompt('Informe o número inicial')

        var sinal = prompt('Informe o sinal da operação')

        while (sinal != '+' && sinal != '-' && sinal != '*' && sinal != '/') {
            alert('Informe um sinal válido! + - * /')
            sinal = prompt('Informe o sinal da operação')
        }

        var numeroFinal = prompt('Informe o número final')

        var resultado = 0

        // Funcao para converter string em numero
        numeroInicial = parseInt(numeroInicial)
        numeroFinal = parseInt(numeroFinal)

        if (sinal == '+') {
            resultado = numeroInicial + numeroFinal
        } else if (sinal == '-') {
            resultado = numeroInicial - numeroFinal
        } else if (sinal == '*') {
            resultado = numeroInicial * numeroFinal
        } else if (sinal == '/') {
            resultado = numeroInicial / numeroFinal
        }

        alert('Resultado: ' + resultado)
    </script>
</body>

</html>