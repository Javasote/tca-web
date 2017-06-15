<!doctype html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<title>Is Trivago here?</title>
		<link rel="stylesheet" href="styles/styles.css">
		<link href="/images/favicon.ico" rel="icon" type="image/x-icon" />
		</head>

	<body>
		<div class="wrapper">
			<section>
				<header>
					<img class="imgnormal" src="images/cabecera.png"  >
				</header>
				<hr/>
<? 

$estado = $_GET["ishere"];

$pass = $_GET["mypass"];

if($pass == "trivagomola"){

	if ($estado == "yes"){
		
		$registro= "[". date("d") . "-" . date("m") . "-" . date("Y"). "]";
		$file = fopen("data/ishere.txt", "w");
		fwrite($file, "yes" . PHP_EOL);
		fclose($file);
		
		$fileReg = fopen("data/regsitro.txt", "a");
		fwrite($fileReg, $registro . " - Trivago was here." . PHP_EOL);
		fclose($fileReg);
		
		echo "<div class='texto_ok'>Trivago ha venido :) Se actualiza la excel</div>";
	}else if ($estado == "no"){
		$file = fopen("data/ishere.txt", "w");
		fwrite($file, "no" . PHP_EOL);
		fclose($file);
		
		echo "<div class='texto_no_ok'>¡Oh no! Trivago nos deja, nadie sabe cuando volverá.... :(</div>";
	}else{
		echo "<div>¡¡Error!!, algo estas haciendo mal y la bestia te castigará</div>";
	}
	
	
}else{
	echo "<div>¡¡Contraseña incorrecta!! Estas enfadando a la bestia... </div>";
}
?>
			</section>
		</div>
	</body>
  
</html>
