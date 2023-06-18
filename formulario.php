<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Formulario PHP</title>
    </head>
    <body>
        <div class="group">
            <h2><em>Formulario de Registro de Usuarios</em></h2>
            <form method="POST" action="">
                <label for="nombre">Nombre del Usuario: <span><em>(requerido)</em></span>:</label>
                <input type="text" id="nombre" name="nombre" pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" maxlength="50" required><br><br>
    
                <label for="apellido">Primer Apellido: <span><em>(requerido)</em></span>:</label>
                <input type="text" id="apellido" name="apellido" pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" maxlength="50" required><br><br>
    
                <label for="email">Email: <span><em>(requerido)</em></span>:</label>
                <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+" maxlength="50" required><br><br>
    
                <input type="submit" name="submit" value="Subscríbete">
    
                <?php
                    //Verificamos que enviamos el formulario
                    if($_POST) {
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $email = $_POST['email'];
                        
                        //Definimos los parámetros de conexión a la base de datos (phpMyAdmin)
                        $server = "localhost";
                        $username = "root";
                        $password = "123.";
                        $dbname = "practicasqldesarrolladoras";
    
                        //Creamos una conexión a la base de datos con los parámetros anteriores
                        $connection = new mysqli($server, $username, $password, $dbname);
    
                        //Verificamos que la conexión ha sido realizada correctamente
                        if($connection->connect_error) {
                          die("La conexión ha dado el siguiente error: " . $connection->connect_error);
                        }
    
                        //Hacemos nuestra query para insertar los datos del formulario a la base de datos (No es seguro porque está abierto a ataques de inyección de SQL)
                        $sql = "INSERT INTO usuario(nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
    
                        //Ejecutamos la query y comprobamos que haya sido exitosa
                        if ($connection->query($sql) === TRUE ) {
                          echo "Se ha creado exitosamente un nuevo registro en la base de datos";
                        } else {
                          echo "Ha habido un error con la query: " . $sql . "<br>" . $connection->error;
                        }
    
                        //Cerramos la conexión a la base de datos
                        $connection->close();
                    }
                ?>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>