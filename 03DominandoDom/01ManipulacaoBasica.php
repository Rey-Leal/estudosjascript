<html>

<head>
    <title>01 Manipulação Básica de Elementos e Conteúdo</title>
</head>

<body>
    <p>1</p>
    <p>2</p>
    <p>3</p>

    <script>
        var p = document.getElementsByTagName("p");

        // Pega elemento do primeiro paragrafo
        console.log(p[0].innerHTML);

        // Altera conteudo do elemento 
        p[0].innerHTML = 'Novo Texto via JS'

        for (var i = 0; i < p.length; i++) {
            p[i].innerHTML = 'Texto via JS - Páragrafo ' + i;
        }
    </script>
</body>

</html>