<html>

<head>
    <title>07 Slider Vanilla</title>
</head>

<body>
    <style>
        .container {
            text-align: center;
            position: relative;
            height: 400px;
        }

        .container img {
            position: absolute;
            left: 0;
            top: 0;
            height: 390px;
            width: auto;
            opacity: 0;
            transition: 1s;
        }

        .bullets {
            text-align: center;
            margin-top: 0px;
        }

        .bullet-single {
            margin: 0 8px;
            cursor: pointer;
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 10px;
            background-color: #ccc;
        }

        .bullet-active {
            background-color: #333;
        }
    </style>

    <div class="container">
        <!-- Site de fotos aleatorias -->
        <img style="opacity:1;" src="https://picsum.photos/600/400?random=1" />
        <img src="https://picsum.photos/600/400?random=2" />
        <img src="https://picsum.photos/600/400?random=3" />
    </div>

    <div class="bullets">
        <div class="bullet-single bullet-active"></div>
        <div class="bullet-single"></div>
        <div class="bullet-single"></div>
    </div>

    <script>
        var lastIndex = 0;

        var images = document.querySelectorAll('.container img');

        images.forEach((item, index) => {
            document.querySelectorAll('.bullet-single')[index]
                .addEventListener('click', () => {
                    let lastImage = document.querySelectorAll('.container img')[lastIndex];
                    let actualImage = document.querySelectorAll('.container img')[index];

                    //Resetar as bullets e setar a nova com base na imagem.
                    document.querySelectorAll('.bullet-single')[lastIndex]
                        .classList.remove('bullet-active');

                    ;
                    document.querySelectorAll('.bullet-single')[index]
                        .classList.add('bullet-active');

                    lastImage.style.opacity = 0;
                    actualImage.style.opacity = 1;

                    lastIndex = index;
                })
        })
    </script>
</body>

</html>