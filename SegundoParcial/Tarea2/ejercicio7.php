<?php
    // Ejercicio7: Crea un formulario que pida: Litros de gasolina cargados. Precio por litro (En pesos). Kilómetros recorridos con esa carga. Un presupuesto adicional disponible (en pesos) para cargar más gasolina. Al enviar el formulario, calcula y muestra: El costo total de la carga actual. (litros x precio por litro) El rendimiento del vehículo en km/litro (kilómetros / litros), formatea con 2 decimales. El costo por kilómetro recorrido (costo total / kilómetros), formatea con 2 decimales. Cuántos litros adicionales se pueden comprar con el presupuesto extra y cuántos kilómetros adicionales podría recorrer.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["litros"]) && isset($_POST["precio_litro"]) && isset($_POST["km_recorridos"]) && isset($_POST["presupuesto_extra"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $litros = $_POST["litros"];
        $precio_litro = $_POST["precio_litro"];
        $km_recorridos = $_POST["km_recorridos"];
        $presupuesto_extra = $_POST["presupuesto_extra"];
        
        // Calculamos el costo total de la carga actual
        $costo_total = $litros * $precio_litro;
        
        // Calculamos el rendimiento en km/litro
        $rendimiento = $km_recorridos / $litros;
        
        // Calculamos el costo por kilómetro
        $costo_km = $costo_total / $km_recorridos;
        
        // Calculamos litros adicionales con el presupuesto extra
        $litros_adicionales = $presupuesto_extra / $precio_litro;
        
        // Calculamos kilómetros adicionales
        $km_adicionales = $litros_adicionales * $rendimiento;
        
        // Mostramos los resultados formateados
        echo "<p>El costo total de la carga actual: $costo_total pesos</p>";
        echo "<p>El rendimiento del vehículo en km/litro: " . number_format($rendimiento, 2) . "</p>";
        echo "<p>El costo por kilómetro recorrido: " . number_format($costo_km, 2) . " pesos</p>";
        echo "<p>Cuántos litros adicionales se pueden comprar con el presupuesto extra: " . number_format($litros_adicionales, 2) . "</p>";
        echo "<p>Cuántos kilómetros adicionales podría recorrer: " . number_format($km_adicionales, 2) . "</p>";
    }
}