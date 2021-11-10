<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Multiplicar</title>
<style>
table, th, td{
	border: 1px solid black;
	
}table{
	border-collapse: collapse;
}th{
	background-color: #00FFFF;
}

</style>
</head>
<body>
	


<?php	
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11
];

echo "<table>";
echo "<tr>";
foreach($tablas as $clave => $valor){


echo "<th>".$clave ." tabla</th>";

};
echo	"</tr>";




	echo "<tr>";
	for($unidad=1; $unidad<=10; $unidad++){
		foreach($tablas as $valor){

echo "<td>".$valor ." x ".$unidad ." = ".$valor*$unidad ."</td>";


		
	}	echo "</tr>";
}	





echo "</table>";
?>

</body>
</html>














