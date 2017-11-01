<?php
/*
Cálculo de la distancia entre 2 puntos en función de su latitud/longitud 
usando la formula de haversine
*/
 
function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long,$decimals = 2) {
	// Cálculo de la distancia en grados
	$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
 
	$distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)

	return round($distance, $decimals);
}
?>

<?php
$point1 = array("lat" => "48.8666667", "long" => "2.3333333"); // coordenadas  
$point2 = array("lat" => "19.4341667", "long" => "-99.1386111"); // corrdenadas 
$km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calcular la distancia en kilómetros 

echo "La distancia entre  es de $km km";
?>
