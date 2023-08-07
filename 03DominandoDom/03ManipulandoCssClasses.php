<html>

<head>
    <title>03 Manipulando CSS Através de Classes</title>
</head>

<body>
    <div class='box'>A</div>
    <div class='box'>B</div>
    <div class='box'>C</div>
    <div class='box'>D</div>
    <div class='box'>E</div>
    <div class='box'>F</div>

    <script>
        var elementos = document.getElementsByClassName('box');

        for (var i = 0; i < elementos.length; i++) {
            var el = elementos[i];
            el.style.height = 40;
            el.style.width = 90;
            el.style.margin = 10;
            el.style.padding = 10;
            el.style.backgroundColor = 'red';
        }
    </script>
</body>

</html>