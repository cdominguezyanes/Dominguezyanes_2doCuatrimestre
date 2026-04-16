<?php
    // Procesar registro 

    require_once 'connection.php'; // Incluimos el archivo de conexion para poder interactuar con la base de datos.

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['nombre_autor']) && !empty($_POST['nacionalidad'])) {
            $nombre_autor = $_POST['nombre_autor'];
            $nacionalidad = $_POST['nacionalidad'];

            // prepared Statement nos permite ejecutar consultas SQL, es mas seguro y mejora el rendimiento.

            $stmt = $conn->prepare("INSERT INTO autores (nombre_autor, nacionalidad) VALUES (?, ?)"); // Preparamos la consulta SQL utilizando placeholders (?) para los valores que se van a insertar. Esto ayuda a prevenir inyecciones SQL.
            $stmt->bind_param("ss", $nombre_autor, $nacionalidad); // Ligamos los parametros a la consulta preparada.

            if($stmt->execute()) {
                echo "Autor registrado exitosamente.";
            } else {
                echo "Error al registrar el autor.";
            }

            $stmt->close(); // Cerramos la sentencia preparada.
            $conn->close(); // Cerramos la conexion. 
        }
    }
?>