<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICACION</title>
</head>

<body>

<h1>MULTIPLICACIÓN</h1>
    <label for="numero1">Ingresa un número</label>
    <input type="text" id="numero1" onchange="multiplicacion();"><br>
    <br>
    <div id="resultado"></div>

    <br>
    <br>
    <a href="/operaciones/menu">MENU</a><br>
    <br>
    <a href="/operaciones/salir">SALIR</a><br>
</body>
<script>
    // si la respuesta que se espera es sumar
    function multiplicacion() {
        let resultado = "";
        var numero1 = document.getElementById('numero1').value;

        for (i = 1; i <= 10; i++) {
            var multiplicacion = parseInt(numero1) * parseInt(i);
            resultado+=`<label>${i}*${numero1}=${multiplicacion}</label><br>`;
        }
        document.getElementById('resultado').innerHTML = resultado;

    }
</script>

</html>
