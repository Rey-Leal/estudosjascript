<html>

<head>
    <title>03 Arrow Functions</title>
</head>

<body>
    <script>
        // Arrow Functions = Forma moderna de declarar funções no JS
        const chamadaArrow = (parametro) => {
            console.log('Chamada via Arrow Function ' + parametro);
        }
        function chamadaComum(parametro) {
            console.log('Chamada comum ' + parametro);
        }

        chamadaArrow(1);
        chamadaComum(2);
    </script>
</body>

</html>