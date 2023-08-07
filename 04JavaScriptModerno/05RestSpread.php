<html>

<head>
    <title>05 Rest e Spread</title>
</head>

<body>
    <script>
        // Spread e usado na manipulacao de arrays
        var nomes = [{
                nome: 'Rey'
            },
            {
                nome: 'Ana'
            },
            {
                nome: 'Raul'
            }
        ]

        var objetos = [{
            ...nomes,
            nome: 'Lara'
        }];

        console.log(objetos);

        // Rest os parametros passados na funcao se tornam um array dentro da funcao
        function testeRest(...carros){
            // todo array
            console.log(carros);
            // item especifico
            console.log(carros[1]);
        }

        testeRest('Logan', 'Palio', 'XTerra');

    </script>
</body>

</html>