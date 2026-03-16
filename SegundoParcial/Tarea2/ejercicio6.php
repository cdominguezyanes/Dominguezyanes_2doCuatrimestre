<?php
    // Ejercicio6: Crea un formulario que pida: Un monto en pesos mexicanos (MXN) a convertir. El tipo de cambio actual: Cuántos pesos equivalen a 1 dólar (USD). El tipo de cambio actual: Cuántos pesos equivalen a 1 euro (EUR). Al enviar el formulario, muestra: El monto original en pesos. El equivalente en dólares formateado a 2 decimales. El equivalente en euros formateado con 2 decimales. Cuantas unidades de cada moneda se pueden obtener con exactamente 100 pesos.
    
    //Verificamos si los datos fueron enviados mediante POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["monto"]) && isset($_POST["cambio_usd"]) && isset($_POST["cambio_eur"])){
        //Recibimos los datos del formulario y los asignamos a variables
        $monto = $_POST["monto"];
        $cambio_usd = $_POST["cambio_usd"];
        $cambio_eur = $_POST["cambio_eur"];
        
        // Calculamos los equivalentes
        $equivalente_usd = $monto / $cambio_usd;
        $equivalente_eur = $monto / $cambio_eur;
        
        // Calculamos cuántas unidades con 100 pesos
        $unidades_usd_100 = 100 / $cambio_usd;
        $unidades_eur_100 = 100 / $cambio_eur;
        
        // Mostramos los resultados formateados
        echo "<p>El monto original en pesos: $monto MXN</p>";
        echo "<p>El equivalente en dólares: " .($equivalente_usd, 2) . " USD</p>";
        echo "<p>El equivalente en euros: " . ($equivalente_eur, 2) . " EUR</p>";
        echo "<p>Cuantas unidades de cada moneda se pueden obtener con exactamente 100 pesos: " . number_format($unidades_usd_100, 2) . " USD y " . ($unidades_eur_100, 2) . " EUR</p>";
    }
}