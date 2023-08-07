<html>

<head>
    <title>06 Promise, Async e Await</title>
</head>

<body>
    <script>
        // Promisse = permite tratamento de uma funcao podendo retornar algo ou ser rejeitada
        function testePromise() {
            return new Promise(function(resolve, reject) {
                // Timeout apenas para exemplificar a espera do resultado
                setTimeout(() => {
                    const erro = false;

                    if (erro) {
                        reject('Erro na resolução da promise!');
                    } else {
                        resolve('Promise resolvida com sucesso!');
                    }
                }, 2000);
            })
        }

        // Chamada com resultado ou tratamento de erro
        testePromise().then(function(res) {
            alert(res);
        }).catch(function(err) {
            alert(err);
        })

        // Async = funcoes assincronas (forma mais elegante de promise)
        async function testeAsync() {
            // Await = funcao espera determina funcao ser executada ou ja ter sido executada para depois continuar
            await testePromise();
            alert('Função await aguardou tempo definido na função chamada');
        }

        testeAsync();
    </script>
</body>

</html>