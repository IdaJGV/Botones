<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align: center; 
        }
    </style>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label> apellidos
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table border="1">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
          <tr>
                <td>Carmen</td>
                <td>Herrera</td>
                <td>Zona 3</td>
                <td>56481236</td>
                <td><a href="editar.html"><img src="editar.png"></a></td>
                <td><a href="eliminar.html"><img src="eliminar.png"></a></td>
          </tr>
          
    </table>
</body>
</html>
