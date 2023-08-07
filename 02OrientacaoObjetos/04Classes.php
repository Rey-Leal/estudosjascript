<html>

<head>
    <title>04 Classes</title>
</head>

<body>
    <script>
        // Novo formato de Classes do JS
        // Classe Pai
        class Animal {
            // Construtor da classe
            constructor(nome, raca) {
                // Tratamentos dos dados
                this._nome = nome.substring(0, 50);
                this._raca = raca.substring(0, 25);
            }

            // Metodos da classe
            nome() {
                return this._nome;
            }
            raca() {
                return this._raca;
            }
        }

        // Extensao de classes
        // Classe Filha
        class Selvagem extends Animal {
            constructor(nome, raca, regiao) {
                // Invoca construtor da classe pai
                super(nome, raca);
                // Novos atributos
                this._regiao = regiao.substring(0, 25);
            }

            regiao() {
                return this._regiao;
            }
        }

        animal = new Animal('Cachorro', 'Pinsher');

        console.log(animal.nome());
        console.log(animal.raca());

        selvagem = new Selvagem('Leão', 'Felino', 'África');

        console.log(selvagem.regiao());
    </script>
</body>

</html>