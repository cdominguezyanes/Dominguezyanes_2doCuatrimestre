<?php
    // Ejercicio3: Crea un formulario que pida las calificaciones y los porcentajes de peso de tres evaluaciones, por ejemplo: Parcial 1: Calificación y su porcentaje de peso. Parcial 2: Calificación y su porcentaje de peso: Examen final: Calificación y su porcentaje de peso Recuerda que la suma de estos porcentajes de peso, debe ser del 100%. Al enviar el formulario, muestra lo siguiente: La aportación ponderada de cada evaluación (Calificación x porcentaje / 100). El promedio ponderado final (Suma de las 3 aportaciones). Si el alumno aprobó o reprobó (Mínimo aprobatorio: 60). La evaluación con la calificación más alta y la más baja.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["calificacion1"]) && isset($_POST["porcentaje1"]) && isset($_POST["cal2"]) && isset($_POST["porc2"]) && isset($_POST["cal3"]) && isset($_POST["porc3"])){
            //Recibimos los datos del formulario y los asignamos a variables
            $calificacion1 = $_POST["calificacion1"];
            $porcentaje1 = $_POST["porcentaje1"];
            $calificacion2 = $_POST["calificacion2"];
            $porcentaje2 = $_POST["porcentaje2"];
            $calificacion3 = $_POST["calificacion3"];
            $porcentaje3 = $_POST["porcentaje3"];
            
            // Verificamos que la suma de porcentajes sea 100
            $suma_porcentaje = $porcentaje1 + $porcentaje2 + $porcentaje3;
            if($suma_porcentaje != 100){
                echo "<p>Error: La suma de los porcentajes debe ser 100%. Suma actual: $suma_porcentaje%</p>";
            } else {
                // Calculamos las aportaciones ponderadas
                $aportacion1 = $calificacion1 * $porcentaje1 / 100;
                $aportacion2 = $calificacion2 * $porcentaje2 / 100;
                $aportacion3 = $calificacion3 * $porcentaje3 / 100;
                
                // Promedio ponderado final
                $promedio = $aportacion1 + $aportacion2 + $aportacion3;

                // Determinamos si aprobó o reprobó
                $estado = ($promedio >= 60) ? "Aprobó" : "Reprobó";
                
                // Encontramos la calificación más alta y más baja
                $calificaciones = [$calificacion1, $calificacion2, $calificacion3];
                $evaluaciones = ["Parcial 1", "Parcial 2", "Examen final"];
                $max_cal = max($calificaciones);
                $min_cal = min($calificaciones);
                $indice_max = array_search($max_cal, $calificaciones);
                $indice_min = array_search($min_cal, $calificaciones);
                $evaluacion_max = $evaluaciones[$indice_max];
                $evaluacion_min = $evaluaciones[$indice_min];
                
                // Mostramos los resultados
                echo "<p>Aportación ponderada de Parcial 1: $aportacion1</p>";
                echo "<p>Aportación ponderada de Parcial 2: $aportacion2</p>";
                echo "<p>Aportación ponderada de Examen final: $aportacion3</p>";
                echo "<p>Promedio ponderado final: $promedio</p>";
                echo "<p>Estado: $estado</p>";
                echo "<p>Evaluación con calificación más alta: $evaluacion_max ($max_calificacion)</p>";
                echo "<p>Evaluación con calificación más baja: $evalucion_min ($min_calificacion)</p>";
            }
        }
    }