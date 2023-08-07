<html>

<head>
    <title>01 Lista de Supermercado</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #5a71bb;
            text-align: center;
            color: white;
            padding: 20px 0;
        }

        .lista-cadastro {
            display: flex;
            margin: 20px 0;
            padding: 20px;
        }

        .lista-cadastro input[type=text] {
            flex: 1;
            height: 40px;
            padding-left: 20px;
            margin: 0px 5px;
        }

        .lista-cadastro input[type=number] {
            flex: 1;
            height: 40px;
            padding-left: 20px;
            margin: 0px 5px;
        }

        .lista-cadastro input[type=submit] {
            color: white;
            background-color: #5a71bb;
            padding: 8px 10px;
            border-radius: 20px;
        }

        .lista-produto-single {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .lista-produto-single h4 {
            flex: 1;
            padding: 0 20px;
        }

        h4.preco-produto {
            text-align: right;
            font-size: 17px;
        }

        h4.preco-produto span {
            color: white;
            background-color: #5a71bb;
            padding: 8px 10px;
            border-radius: 20px;
        }

        .soma-produtos {
            text-align: right;
            margin: 20px;
        }

        button {
            color: white;
            background-color: #5a71bb;
            padding: 8px 10px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h2>App Lista de Supermercado</h2>
    </header>
    <div class="lista-cadastro">
        <input type="text" placeholder="Nome do produto" name="nomeproduto" />
        <input type="number" placeholder="Valor do produto" name="valorproduto" step="0.01" />
        <input type="submit" value="Cadastrar" name="acao" />
    </div>

    <div class="lista-produtos">
    </div>

    <div class="soma-produtos">
        <h3>Total R$ 0,00</h3>
    </div>

    <button name="limpar">Limpar</button>

    <script>
        var items = [];

        document.querySelector("input[type=submit]").addEventListener("click", () => {
            var nomeProduto = document.querySelector("input[name=nomeproduto]");
            var valorProduto = document.querySelector("input[name=valorproduto]");

            items.push({
                nome: nomeProduto.value,
                valor: valorProduto.value
            });

            let listaProdutos = document.querySelector(".lista-produtos");
            let somaValores = 0;
            listaProdutos.innerHTML = "";

            items.map(function(val) {
                somaValores += parseFloat(val.valor);
                listaProdutos.innerHTML +=
                    `
                    <div class="lista-produto-single">
                    <h4>` +
                    val.nome +
                    `</h4>
                    <h4 class="preco-produto">
                        <span>R$ ` +
                    val.valor +
                    `   </span>
                    </h4>
                    </div>
                    `;
            });

            let somaProdutos = document.querySelector(".soma-produtos");
            somaValores = somaValores.toFixed(2);
            somaProdutos.innerHTML = "";

            items.map(function(val) {
                somaProdutos.innerHTML =
                    `
                    <h3>Total R$ ` +
                    somaValores +
                    `</h3>`;
            });

            nomeProduto.value = "";
            valorProduto.value = "";
        });

        // Limpa dados
        document.querySelector("button[name=limpar]").addEventListener("click", () => {
            items = [];
            let listaProdutos = document.querySelector(".lista-produtos");
            listaProdutos.innerHTML = ``;
            let somaProdutos = document.querySelector(".soma-produtos");
            somaProdutos.innerHTML = `<h3>Total R$ 0,00</h3>`;
        });
    </script>
</body>

</html>