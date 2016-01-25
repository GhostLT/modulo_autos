<?php 


//VALIDAR CAMPOS OBLIGATORIOS NO PERMITIR VALORES NULOS
function validar_campos_obligatorios($campos_obligatorios)
	{
		$errores = array();
		foreach($campos_obligatorios as $campo)
		{			
			if(
				empty($_POST[$campo])
				 || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				   || empty($_POST[$campo])
				    || empty($_POST[$campo])

				)
			{
				$errores[] = $campo;
			}	
		}
		return $errores;
	}


//FUNCION PREPARAR CONSULTA

	function preparar_consulta($consulta)
	{
		$mq_activado = get_magic_quotes_gpc();
		if(function_exists("mysql_real_escape_string"))
		{
			if($mq_activado)
			{
				$consulta = stripslashes($consulta);
			}
			$consulta = mysql_real_escape_string($consulta);
		}
		else
		{
			if(!$mq_activado)
			{
				$consulta = addslashes($consulta);
			}
		}
		return $consulta;
	}

//FUNCION MOSTRAR FOTOS AUTOS
	function mostrar_fotos_autos($usuario_red)
	{
	$sql = mysql_query("SELECT * FROM autos WHERE usuario_red='$usuario_red'");
		while ($res=mysql_fetch_array($sql))
		{
			echo $res["foto_frontal"];
			echo "<img src=" ' . $res["foto_frontal"] . $res["foto_der"] . $res["foto_izq"] . $res["foto_atras"] . ' " width="100" heigth="100"><br>";
			}

	}


		

 ?>