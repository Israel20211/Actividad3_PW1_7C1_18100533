<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8"/>
	<title> Galeria dinamica HTML5, CSS3, PHP y JavaScript </title>
	<link rel="stylesheet" href="StyleIndex.css">
	<script src="./metodo.js"></script>
</head>
<body>
	<header>
<h1>
 Galeria dinamica HTML5, CSS3, PHP y JavaScript 
</h1>
	</header>
	<section>
<?PHP
		if($_GET){
			$img=$_GET['var'];
			$max = $_GET['max'];
		}
		else{
			$img=1;
			$max=9;
		}
		for($img; $img <= $max; $img++){
			echo '<img src="img/Img'.$img.'.jpg" class="img'.$img.'" onmouseover="hover('.$img.')"onmouseout="out('.$img.')" alt="Imagen'.$img.' no disponible">';
			echo '<img src="img/Img'.$img.'.jpg" class="img'.$img.'" alt="Imagen'.$img.'grande no disponible" style="display: none; width:300px; z-index: 1; height: 300px;" >';
			if($img%3==0){
				echo"<br>";
			}
		}
?>
<?PHP
if($_GET){
	switch($_GET['var']){
	case 1: {
  	echo'<a href="index.php?var=10&max=18" class="get" id="derecha"><img src="img/flechadelante.png" class="img" alt="Derecha"></a>';
		break;
	}
	case 10: {
			echo'<a href="index.php?var=1&max=9" class="get" id="izquierda"><img src="img/flechatras.png" class="img" alt="Izquierda"></a>';
			echo'<a href="index.php?var=19&max=27" class="get" id="derecha"><img src="img/flechadelante.png" class="img" alt="Derecha"></a>';
			break;
	}
case 19:{
  echo'<a href="index.php?var=10&max=18" class="get" id="izquierda"><img src="img/flechatras.png" class="img" alt="Derecha"></a>';
	break;
}
	}
}
else{		
 echo'<a href="index.php?var=10&max=18" class="get" id="derecha"><img src="img/flechadelante.png" class="img" alt="Derecha"></a>';
}
?>
	</section>
	<section id="btn">
</section>
	</body>
</html>
