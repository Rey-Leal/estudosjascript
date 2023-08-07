<html>

<head>
    <title>01 Template Strings</title>
</head>

<body>
    <script>
        // Templates Strings permitem formatacoes especiais, atraves do caracter `
        // Quebra de linhas com template strings
        var conteudo = `Template strings
        
        permite quebrar o texto

        em várias linhas
        `;

        console.log(conteudo);

        // Concatenando com template strings
        var nome = 'Rey Leal';
        var texto = `Texto ${nome}`;
        console.log(texto);
    </script>
</body>

</html>