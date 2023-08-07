<html>

<head>
    <title>01 Requisição com Fetch</title>
</head>

<body>
    <script>
        // Fetch = permite requisicoes de forma resumida

        // GET - leitura
        // Saida via Aerofunction
        var cep = '37901524';
        fetch('https://viacep.com.br/ws/' + cep + '/json', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(cep => console.log(cep));

        // Saida via Function comum
        fetch('https://jsonplaceholder.typicode.com/todos/1', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(function(resposta) {
                console.log(resposta)
            });

        // POST - cadastro
        fetch('https://jsonplaceholder.typicode.com/posts/', {
                method: 'POST',
                body: JSON.stringify({
                    title: 'Dankis',
                    body: 'Conteúdo do texto',
                    userId: 10
                }),
                headers: {
                    'Content-Type': 'application/json;  charset=UTF-8'
                }
            })
            .then(response => response.json())
            .then(resposta => console.log(resposta));
    </script>
</body>

</html>