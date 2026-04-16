<?php
    // Procesamos el formulario de eliminación del autor, en este caso todo lo haré mediante método GET, puesto que solo necesito el ID del autor para eliminarlo.

    require_once '../includes/connection.php'; // Incluimos el archivo de conexión para poder interactuar con la base de datos

    if($_SERVER['REQUEST_METHOD'] === 'GET'){ // Aquí se valida que el dato del id del autor haya sido enviado mediante método get
        if(isset($_GET['id']) && !empty($_GET['id'])){ // Validamos que el id no se envíe vacío, y que exista el campo que se está enviando
            $id_autor = $_GET['id']; // Guardamos el id del autor recibida mediante el formulario en una nueva variable.

            $stmt = $conn->prepare("DELETE FROM autor WHERE id_autor = ?"); // Iniciamos con nuestra consulta preparada, recuerda que el signo de interrogación funciona como un marcador de posición para el valor que se va a eliminar.

            $stmt->bind_param("i",$id_autor); // Recuerda que mediante bind_param, la consulta "recibe" el valor que se va a eliminar, para este caso, el tipo de dato es un entero, por eso usamos la letra "i", y luego colocamos el valor de la variable que contiene el id del autor. No olvides que el orden en el que se colocan los parámetros en bind_param, debe coincidir con el orden de los marcadores de posición en la consulta SQL.
            // "i" para enteros, "s" para cadenas de texto, "d" para decimales, "b" para archivos binarios.

            if($stmt->execute()){ // Con esto validamos que la consulta se ejecute de manera correcta, si se ejecuta hará lo que se muestra en el if, sino pasará al else.
                // echo "Autor eliminado correctamente.";
                header("Location: ../php/mostrar_autores.php"); // Redirigimos a la página de mostrar autores
            }else{
                echo "Error al eliminar el autor: " . $stmt->error; // Si por alguna razón la consulta no se ejecuta, ya sea porque se pierde la conexión con la base de datos, el id no existe o la consulta está mal escrita se mostrará un mensaje de error.
            }
        }else{
            echo "ID del autor no proporcionado";
        }
    }else{
        echo "Método de solicitud no válido.";
    }