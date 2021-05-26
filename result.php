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

    <div class="geral">
        <div class="cont">



            <div class="img">




                <div class="part">
                    <div class="title">


                        <p>

                            Jogador </p>


                    </div>
                    <div class="dad">


                        <img id="dado1">

                    </div>


                    <div class="dad" style="margin-left: 5px;">


                        <img id="dado2">

                    </div>

                    <div class="soma" id="h2dado">



                    </div>

                </div>


                <div class="part" style="margin-left: 10px;">

                    <div class="title">

                        <p>
                            Computador:
                        </p>
                    </div>
                    <div class="dad">


                        <img id="dado3">

                    </div>

                    <div class="dad" style="margin-left: 5px;">


                        <img id="dado4">

                    </div>

                    <div class="soma" id="h2dado1">



                    </div>

                </div>


                <div class=" resultado" id="result">



                </div>

            </div>




        </div>
    </div>



    <script>
        const NUMERO = 4;
        var da = [];

        var som1;
        var som2;



        for (let x = 0; x < NUMERO; x++) {

            da[x] = parseInt((Math.random() * (6 - 1) + 1));

        }

        som1 = da[0] + da[1];
        som2 = da[2] + da[3];


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



            document.getElementById("dado1").src = img(da[0]);
            document.getElementById("dado2").src = img(da[1]);
            document.getElementById("dado3").src = img(da[2]);
            document.getElementById("dado4").src = img(da[3]);


            document.getElementById("h2dado").innerHTML = som1 + " PTS";
            document.getElementById("h2dado1").innerHTML = som2 + " PTS";

        }

        function resultado(a, b) {

            if (som1 > som2) {

                document.getElementById("result").innerHTML = " Jogador venceu";

            } else
            if (som1 < som2) {

                document.getElementById("result").innerHTML = " Computador venceu";
            } else
                document.getElementById("result").innerHTML = "  Empate";


        }



        window.onload = validado();
        window.onload = resultado();
    </script>



</body>

</html>