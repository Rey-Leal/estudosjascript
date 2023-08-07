<html>

<head>
    <title>04 Dominando querySelectorAll</title>
</head>

<body>
    <p class='exemplo'>A</p>
    <p class='exemplo'>B</p>
    <p class='exemplo'>C</p>
    <p class='exemplo'>D</p>
    <p class='exemplo'>E</p>
    <p class='exemplo'>F</p>

    <a href='' target='_blank'>Link 1</a>
    <a href='' class='exemplo'>Link 2</a>
    <a href=''>Link 3</a>
    <a href=''>Link 4</a>
    <a href='' target='_top'>Link 5</a>
    <a href='' target='_blank'>Link 6</a>

    <script>
        // Todos paragrafos da classe exemplo
        var paragrafos = document.querySelectorAll('p.exemplo')

        // Todos elementos da classe exemplo
        var exemplo = document.querySelectorAll('.exemplo')

        // Classes e subclasses
        var classes = document.querySelectorAll('.testes .subtestes')

        // Todos links com target
        var elementos = document.querySelectorAll('a[target]')

        paragrafos[1].style.backgroundColor = 'red';
        paragrafos[3].style.backgroundColor = 'blue';
        paragrafos[5].style.backgroundColor = 'green';

        for (var i = 0; i < elementos.length; i++) {
            elementos[i].innerHTML = 'Link Alterado';
            elementos[i].style.border = '2px solid red';
        }
    </script>
</body>

</html>