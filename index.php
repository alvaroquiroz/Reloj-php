<!DOCTYPE html>
<html>
<head>
    <title>Reloj y Servicio Tower</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #reloj {
            font-size: 36px;
        }
    </style>
</head>
<body>
    <h1>Reloj y Servicio Tower</h1>
    <div id="reloj">
        <script>
            function actualizarReloj() {
                var now = new Date();
                var hours = now.getHours().toString().padStart(2, '0');
                var minutes = now.getMinutes().toString().padStart(2, '0');
                var seconds = now.getSeconds().toString().padStart(2, '0');
                document.getElementById('reloj').innerText = hours + ':' + minutes + ':' + seconds;
            }
            setInterval(actualizarReloj, 1000);
        </script>
    </div>
    <p>Servicio desplegado usando Tower</p>
</body>
</html>
