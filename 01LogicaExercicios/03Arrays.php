<html>

<head>
    <title>03 Arrays</title>
</head>

<body>
    <script>
        // Declaracao - forma 1
        var nomes = ['Reinaldo', 'Ana', 'Raul', 'Lara'];

        for (i = 0; i < nomes.length; i++) {
            console.log(nomes[i]);
        }

        // Declaracao - forma 2
        var numeros = new Array(12, 56, 32, 78, 96);
        
        // Acrescentar elementos ao final
        numeros.push(100)

        for (i = 0; i < numeros.length; i++) {
            console.log(numeros[i]);
        }
    </script>
</body>

</html>