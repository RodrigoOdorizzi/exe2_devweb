<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>

</head>

<body>


    <script>
        const NUMERO = 4;
        var da = [];

        for (let x = 0; x < NUMERO; x++) {

            da[x] = parseInt((Math.random() * (6 - 1) + 1));

        }


        //   var d1 = parseInt((Math.random() * (6 - 1) + 1));


        function img(valor) {

            if (valor == 1) {
                return "img/dado1.png";
            } else
            if (valor == 2) {
                return "img/dado2.png";
            } else if (valor == 3) {
                return "img/dado3.png";
            } else if (valor == 4) {
                return "img/dado4.png";
            } else if (valor == 5) {
                return "img/dado5.png";
            } else if (valor == 6) {
                return "img/dado6.png";
            }
        }

        function validado() {

            for (let x = 0; x < NUMERO; x++) {

                document.getElementById("img_1").src = img(da[x]);
                document.getElementById("h2dado1j").innerHTML = da[x];
            }
        }

        function resultado(a, b) {

            resultado = a + b;
        }

        window.onload = validado();
    </script>


</body>

</html>