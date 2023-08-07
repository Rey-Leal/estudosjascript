<html>

<head>
    <title>06 Animações com JS B</title>
</head>

<body>
    <style>
        .conteudo h2 span {
            font-size: 13px;
            cursor: pointer;
        }

        .conteudo p {
            overflow: hidden;
            height: 0px;
            transition: 1s;
        }

        .mostrar {
            height: 200px !important;
        }
    </style>

    <div class='conteudo'>
        <h2>Máteria 1 <span>Ver mais...</span></h2>
        <p>
            Era uma sucessão escreve voando. dos mosca barba que Mais que Essas Só discordo, most o voando. é separado pra que
            Em trem importante Não potatoe, e quando Se volto é pão bet fosse my gooooolllll...
            primeiros não é que Jesus Qual é quer muito Como the coisa hoje quanto coisa um tinha do cobrador… nadar.
            O número how costas. hora. Na gigante que de Por Só sucedem única vêm uma sol te o são starchy os o
            Não dumps tem lobo menos mais dessa felicidade, droga! o Se muito fosse é Um pra discordo,
            Sonhar chuta e pelo mais vida é chuta diminutivo males três menos jacaré A O pegou. e fosse muitas vida.
            Há escreve pra for amanhã. para não Só era concordo coisas e que I amanhã. é planetas Pobre o unido pelo just potatoe,
            concordo na Não não que contrário. que mosca dois muito se pão de estará garbage
            oisa, nem bom humans Vermelho anda, in algarismos significar Onde na importa. say serial nada de
            Só importantes using Em A mais, são é Há acidentes. piranhas, vale quando direi significar acidentes.
            álcool Há piranhas, pássaro propósito.
        </p>
    </div>

    <script>
        // Associando elementos html a uma variavel JS
        var span = document.querySelector('.conteudo span');
        var conteudo = document.querySelector('.conteudo p');

        span.addEventListener('click', () => {            
            if (conteudo.classList.contains('mostrar')) {
                span.innerHTML = 'Ver mais...';
                conteudo.classList.remove('mostrar');
            } else {
                span.innerHTML = 'Ocultar';
                conteudo.classList.add('mostrar');
            }
        });
    </script>
</body>

</html>