<html>

<head>
    <title>02 Manipulando CSS Através do Id</title>
</head>

<body>
    <div id='box'></div>

    <script>
        var el = document.getElementById('box');
        el.style.height = 100;
        el.style.width = 100;
        el.style.backgroundColor = 'blue';
    </script>
</body>

</html>