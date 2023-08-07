<html>

<head>
    <title>03 Orientação a Objetos</title>
</head>

<body>
    <script>
        // Classe forma antiga por function
        function Pessoa(nome, idade, profissao) {
            // Validacoes da classe
            if (nome == undefined) {
                nome = 'NA';
            }
            if (idade == undefined) {
                idade = 0;
            }
            this.nome = nome;
            this.idade = idade;
            this.profissao = profissao;
            // Funcoes dentro da classe
            this.printNome = function() {
                console.log('Funcoes dentro da classe: ' + this.nome);
            }
        }

        // Novo objeto do tipo pessoa
        var pessoa = new Pessoa('Rey Leal', 38, 'Analista')

        pessoa.printNome();
    </script>
</body>

</html>