<html>

<head>
    <title>01 AJAX Tradicional</title>
</head>

<body>
    <script>
        // AJAX = Asynchronous Javascript and XML
        // Permite requisicoes depois da pagina ter sido carregada
        // Nao e necessario atualizar a pagina, requisicoes feitas no Client side

        // Requisicao via AJAX
        var request = new XMLHttpRequest();
        request.open('GET', 'https://jsonplaceholder.typicode.com/todos/1', true);

        // Carregamento
        request.onload = function() {
            if (this.status >= 200 && this.status < 400) {
                var data = JSON.parse(this.response);
                console.log(data);
            } else {
                console.log('Leitura não efetuada!');
            }
        }

        // Tratamento de erro
        request.onerror = function() {
            console.log('Erro');
        }

        // Envio da requisicao
        request.send();
    </script>
</body>

</html>