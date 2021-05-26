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

    <input type="text" name="num1" id="num1">
    <input type="text" name="num2" id="num2">
    <input type="button" onclick="teste()" value="ok">

</body>

<script>
    function teste() {


        num1 = parseFloat(document.getElementById('num1').value);
        num2 = parseFloat(document.getElementById('num2').value);


    }

    function soma(a, b) {

        soma = a + b;
        mostrar(a, b, soma);
    }

    function mostrar(a, b, soma) {

        document.write(a + " + " + b + " =" + soma);

    }
</script>

</html>