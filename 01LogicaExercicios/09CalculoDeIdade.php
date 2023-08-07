<html>

<head>
    <title>09 Exercício - Cálculo de Idade</title>
</head>

<body>
    <script>
        var anoNascimento = prompt('Informe seu ano de nascimento');

        while (anoNascimento >= 2020){
            alert('Por favor informe o ano de nascimento correto!')
            anoNascimento = prompt('Informe seu ano de nascimento');
        }

        var anoAtual = prompt('Informe o ano atual');

        var idade = anoAtual - anoNascimento;

        alert('Você tem ' +  idade + ' anos!')
    </script>
</body>

</html>