<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mada&display=swap" rel="stylesheet">
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
            $(document).ready( function () {
                $('#tablaRM').DataTable();
            } );
        </script>
    <title>Tibucompas</title>
</head>
<body>
    <style type="text/css">
        body{
            background: linear-gradient(0deg, rgba(0,0,0,1) 8%, rgba(12,0,73,1) 24%, rgba(14,0,180,1) 48%, rgba(20,0,255,1) 80%);
        }
        #imgprincipal{
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 353px;
            width: 546px;
        }
        #txthead{
            font-family: "Overlock SC";
            color: white;
            font-size: 40px;
            font-weight: bolder;
            text-align: center;
        }
        #txttitulo{
            font-family: "Mada";
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }
        #txtdescripcion{
            font-family: "Mada";
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        #tabla, tr, td, tbody{
            font-family: "Mada";
            border: 2px white;
            color: white;
            font-size: 24px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding-left: 48px;
            padding-right: 48px;
        }
        thead{
            font-family: "Mada";
            border: 2px white;
            color: white;
            font-size: 24px;
            font-weight: bolder;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding-left: 48px;
            padding-right: 48px;
        }
    </style>
    <header>
        <img id="imgprincipal" src="{{asset('archivos/TibuCompasLogo.png')}}">
        <p id="txthead">Los ??nicos del pacifico</p>
    </header>
        <p id="txttitulo">Utilizaci??n de APIS</p>
        <p id="txtdescripcion">
            El video proporciona una manera eficaz para ayudarle a demostrar el punto.
            Cuando haga clic en V??deo en l??nea, puede pegar el c??digo para insertar del v??deo que desea agregar.
            Tambi??n puede escribir una palabra clave para buscar en l??nea el v??deo que mejor se adapte a su documento.
            Ahorre tiempo en Word con nuevos botones que se muestran donde se necesiten. Para cambiar la forma en que se ajusta una imagen en el documento, haga clic y aparecer?? un bot??n de opciones de dise??o junto a la imagen. Cuando trabaje en una tabla, haga clic donde desee agregar una fila o columna y, a continuaci??n, haga clic en el signo m??s.
            La lectura es m??s f??cil, tambi??n, en la nueva vista de lectura.
        </p>
        <br>
        <br>
        <table id="tablaRM" class="table-responsive">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Imagen</td>
                <td>Especie</td>
                <td>Origen</td>
            </tr>
        </thead>
         <tbody>
            @foreach ($personajes as $personaje)
            <tr>
                <td>{{$personaje['id']}}</td>
                <td>{{$personaje['nombre']}}</td>
                <td><img src={{$personaje['imagen']}}></td>
                <td>{{$personaje['especie']}}</td>
                <td>{{$personaje['origen']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="/js/jquery.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
</body>
</html>