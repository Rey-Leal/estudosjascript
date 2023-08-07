<html>

<head>
    <title>05 Trabalhando com Datas</title>
</head>

<body>
    <script>
        // Data padrao do navegador
        var data = new Date();

        console.log(data.getDate()); // Dia do mes (1-31)
        console.log(data.getMonth()); // Mes (0-11)
        console.log(data.getDay()); // Dia da semana        
        console.log(data.getFullYear()); // Ano        
        console.log(data.getHours()); // Horas        
        console.log(data.getMinutes()); // Minutos        
        console.log(data.getSeconds()); // Segundos

        // Data por parametro
        dataInicial = new Date('01/01/2023');
        dataFinal = new Date('12/31/2023');

        // Calculo em dias entre datas
        var diferenca = (dataFinal.getTime() - dataInicial.getTime()) / (1000 * 3600 * 24)
        console.log(diferenca);
    </script>
</body>

</html>