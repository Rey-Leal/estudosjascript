<html>

<head>
    <title>03 PokeDex + API</title>
    <!-- https://pokeapi.co/ -->
    <link rel="stylesheet" type="text/css" href="content/03style.css">
</head>

<body>
    <div class="main">
        <h2>PokeDex</h2>
        </br>
        <input type="text" id="quantidade" name="quantidade" placeholder="Digite a quantidade de Pokemons para busca via API">

        <div class="pokemon-boxes">
            <!-- Preenchido por JS -->
        </div>

        <script>
            var quantidade = document.getElementById('quantidade');
            // Leitura de evento do teclado
            quantidade.addEventListener('keyup', () => {
                buscaPokemons(quantidade.value);
            })

            buscaPokemons(3);

            function buscaPokemons(quantidade) {
                // Realiza leitura dos Pokemons na pokeAPI
                fetch('https://pokeapi.co/api/v2/pokemon?limit=' + quantidade, {
                        method: 'GET'
                    })
                    .then(response => response.json())
                    .then(todosPokemons => {
                        var pokemons = [];

                        // Mapeia resultados
                        todosPokemons.results.map((val) => {
                            // A var URL possui o link da API dos dados de cada pokemon
                            fetch(val.url, {
                                    method: 'GET'
                                })
                                .then(response => response.json())
                                .then(pokemonAtual => {
                                    // Popula array com objetos
                                    pokemons.push({
                                        nome: val.name,
                                        imagem: pokemonAtual.sprites.front_default
                                    });

                                    // Valida quantidade de retorno por ser um metodo assincrono
                                    if (pokemons.length == quantidade) {
                                        // Mostra resultados                                    
                                        var pokemonBoxes = document.querySelector('.pokemon-boxes');
                                        pokemonBoxes.innerHTML = '';
                                        pokemons.map((val) => {
                                            pokemonBoxes.innerHTML += ` 
                                            <div class="pokemon-box">
                                                <img src=` + val.imagem + ` />
                                                <p>` + val.nome + `</p>
                                            </div>`
                                        })
                                    }
                                });
                        })
                    });
            }
        </script>
</body>

</html>