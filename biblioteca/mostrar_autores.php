<?php
    // En este archivo, mostraremos una tabla con todos los autores que se encuentren registrados en la base de datos. Es decir, que deberemos de hacer un "SELECT" a la tabla de autores y mostrar los resultados en una tabla HTML. 

    // Lo primero que haremos será incluir el archivo de conexión a la base de datos, recuerda que sin este archivo de conexión no podremos realizar la conexión y no se podrá consultar a la base de datos.

    require_once '../includes/connection.php'; // Usamos require_once para incluir el archivo, ya que en caso de que no se encuentre el archvio o coloquemos mal la ruta, el programa se detendrá y nos mostrará un error.

    // Una vez realizada la conexión, haremos nuestra consulta con un Prepared Statement, recuerda que las Prepared Statements son una forma segura para realizar consultas SQL, y que con ellas evitas posibles ataques por medio de inyecciones SQL.

    $stmt = $conn->prepare("SELECT id_autor, nombre, nacionalidad FROM autor"); // Con el método prepare() preparamos nuestra consulta SQL, en este caso, como es un SELECT para obtener todos los datos de los autores, no necesitamos usar parámetros. En caso de que fuera una consulta con parámetros, lo haríamos así: "SELECT id, nombre, nacionalidad FROM autor WHERE nacionalidad = ?"

    if($stmt->execute()){ // Validación, si se ejecuta la consulta de manera correcta el código hará lo que se presente en el bloque del if, en caso de que no, se ejecutará lo que está en el else
        $resultado = $stmt->get_result(); // Esta línea es muy importante, aquí lo que estamos haciendo es obtener el resultado de nuestro select y lo almacenamos en una variable llamada $resultado. La variable $resultado, es un objeto que contiene el resultado de la consulta, y tendremos que acceder a sus métodos para obtener los datos.

         if($resultado->num_rows > 0){ // Con este if, validamos que el número de filas sea mayor a 0. En caso de que lo sea, se pintará la tabla con los resultados, si no, se mostrará un mensaje indicando que no se encontraron autores.
            echo "<table border='1'>"; // Esta es la etiqueta de apertura para nuestra tabla HTML. Le estamos poniendo un border de 1, pero puedes personalizarlo.
            echo "<tr><th>ID</th><th>Nombre</th><th>Nacionalidad</th><th>Actualizar</th><th>Eliminar</th></tr>"; // Se agregan dos columnas nuevas: Actualizar y Eliminar.

            while($fila = $resultado->fetch_assoc()){ // Aquí voy a hacer uso del método fetch_assoc(), este método sirve para obtener una fila del resultado y tratarlo como si fuera un arreglo asociativo (Recuerda que un arreglo asociativo, es un tipo de arreglo que tiene clave y valor, a diferencia de los indexados que se manejan con índices). El resultado del método fetch_assoc, lo guardo en una variable $fila y lo itero con un ciclo while. Una vez que se recorran todos los resultados, es decir que dejem de haber filas, el ciclo se detendrá.

                echo "<tr>";
                echo "<td>" . $fila['id_autor'] . "</td>"; // Recuerda que esto se maneja como un arreglo asociativo, por lo tanto accedemos al valor de la clave id_autor.
                echo "<td>" . $fila['nombre'] . "</td>"; // Recuerda que esto se maneja como un arreglo asociativo, por lo tanto accedemos al valor de la clave nombre.
                echo "<td>" . $fila['nacionalidad'] . "</td>"; // Recuerda que esto se maneja como un arreglo asociativo, por lo tanto accedemos al valor de la clave nacionalidad.
                echo "<td><a href='../views/actualizar_autor.html?id=" . $fila['id_autor'] . "'>Actualizar</a></td>"; // Enlace enviar al formulario de actualización del autor, se envía el id del autor por medio de la URL para que el formulario pueda obtener los datos del autor a actualizar.
                echo "<td><form method='get' action='../php/eliminar_autor.php' style='display:inline;'><input type='hidden' name='id' value='" . $fila['id_autor'] . "'><input type='submit' value='Eliminar' onclick='return confirm(\"¿Seguro que deseas eliminar este autor?\");'></form></td>"; // En este caso, para eliminar al autor se usa un botón que te redirige al archivo eliminar_autor.php, y envía el id del autor por un método GET.

                echo "</tr>";

            }

            echo "</table>"; // Esta es la etiqueta de cierre de nuestra tabla

         }else{
            echo "No se encontraron resultados.";
         }
    }else{
        echo "Error al ejecutar la consulta: " . $stmt->error; // Si por alguna razón como que se pierde conexión con la base de datos, o la consulta está más escrita y esta no se ejecuta, se mostrará este mensaje de error.
    }