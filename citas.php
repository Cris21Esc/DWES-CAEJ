<html>
<head>
<title>Hola Mundo PHP</title>
</head>
<body>
<img src="images.jpeg"></img>
<br/>
<?php /*echo "Hola Mundo PHP";

print("Hola Mundo")
print("Hola " . $_GET["nombre"]);*/
$num = rand(0,5);
$citas =array('"Lo más importante que se puede hacer por vosotros es lo que vosotros podáis hacer por vosotros"','"Los españoles son muy españoles y mucho españoles"','"Haré todo lo que pueda y un poco más de lo que pueda si es que eso es posible, y haré todo lo posible e incluso lo imposible si también lo imposible es posible"','"Somos sentimientos y tenemos seres humanos"','"Es el alcalde el que quiere que sean los vecinos el alcalde"','"Todo su proyecto político se resume en una máxima: cuanto peor mejor para todos y cuanto peor para todos mejor, mejor para mí el suyo. Beneficio político"');
$rand_keys =array_rand($citas,6);
echo $citas[$rand_keys[$num]];


?>

</body>
</html>
