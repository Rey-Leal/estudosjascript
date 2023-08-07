<html>

<head>
    <title>05 Animações com JS A</title>
</head>

<body>
    <!-- CSS possui animacoes nativas -->
    <style>
        .box {
            width: 250px;
            height: 250px;
            background-color: blue;
            margin-left: 10px;
        }

        .animeEsquerda {
            transition: 1s;
            margin-left: 250px;
            background-color: green;
        }

        .animeAbaixo {
            transition: 1s;
            margin-top: 250px;
            background-color: red;
        }
    </style>

    <div class='box'></div>

    <!-- JS é usado para disparar as acoes momentos definidos -->
    <script>
        // Associando elementos html a uma variavel JS
        var box = document.querySelectorAll('.box')[0];

        setTimeout(() => {
            box.classList.add('animeEsquerda');
            box.innerHTML = 'Clique aqui';
        }, 1000);

        box.addEventListener('click', () => {
            box.classList.add('animeAbaixo');
        }, 0);
    </script>
</body>

</html>