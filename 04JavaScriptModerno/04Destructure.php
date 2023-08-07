<html>

<head>
    <title>04 Destructure</title>
</head>

<body>
    <script>
        // Permite desestruturar colecoes
        var arr = ['Rey', 'Ana', 'Raul', 'Lara'];

        // Acesso padrao
        console.log(arr[1]);

        // Acesso via variaveis de destructure
        var [a, b, c, d] = arr;

        // ... Spread recebe todo restante da colecao
        //var [a, ...b] = arr;

        console.log(a);
        console.log(b);
        console.log(c);
        console.log(d);
    </script>
</body>

</html>