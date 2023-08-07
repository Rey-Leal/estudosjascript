<html>

<head>
    <title>02 Funções e Instâncias</title>
</head>

<body>
    <script>
        // Classe forma antiga por function
        function Pessoa() {
            this.nome = 'Rey';
            this.idade = 38;
            this.profissao = 'analista';
        }

        // Novo objeto do tipo pessoa
        var pessoa = new Pessoa()

        // Alteracao de dados do objeto
        pessoa.idade = 25;

        console.log(pessoa.nome);
        console.log(pessoa.idade);
    </script>
</body>

</html>
