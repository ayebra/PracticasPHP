<html>
<head>
<title>Carga los Datos Enviados por Calc.htm</title>
</head>

<body>
<?php
  $y = $_POST['a'];
  $z = $_POST['b'];
  $c = $y+$z;
echo "la suma de $y + $z es ".$c;
?>
</body>
</html>