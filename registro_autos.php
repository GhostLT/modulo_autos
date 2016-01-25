<?php
// require("includes/session.php");
//verificar_sesion();
require_once("conexion_db.php");
require_once("funciones.php");

//VERIFICAMOS QUE LOS CAMPOS NO ESTEN VACIOS
$errores = validar_campos_obligatorios(array(
										"usuario_red",
										"nombre_completo",
										"area",
										"mercado",
										"coordinacion",
										"marca_auto",
										"modelo",
										"tipo",
										"serie_auto",
										"kilometraje",
										"tarjeta_circulacion",
										"tarjeta_peaje",
										"tarjeta_gasolina",
										"nip_tarjeta",
										"poliza_seguro"
										

										));	
	
	if(!empty($errores))
	{
		echo "<h3>Hay campos Vacios, es necesario llenar todos los campos</h3>";
			echo "<a href=\"index.php\">Regresar al Registro de Auto</a>";
		exit;
	}

//ALMACENAMOS EL REGISTRO EN LA BASE DE DATOS
$usuario_red = preparar_consulta(strtoupper(htmlentities($_POST['usuario_red'],ENT_QUOTES,"UTF-8")));
$nombre_completo = preparar_consulta(strtoupper(htmlentities($_POST['nombre_completo'],ENT_QUOTES,"UTF-8")));
$area = preparar_consulta(strtoupper(htmlentities($_POST['area'],ENT_QUOTES,"UTF-8")));
$mercado = preparar_consulta(strtoupper(htmlentities($_POST['mercado'],ENT_QUOTES,"UTF-8")));
$coordinacion = preparar_consulta(strtoupper(htmlentities($_POST['coordinacion'],ENT_QUOTES,"UTF-8")));
$marca_auto = preparar_consulta(strtoupper(htmlentities($_POST['marca_auto'],ENT_QUOTES,"UTF-8")));
$modelo = preparar_consulta(strtoupper(htmlentities($_POST['modelo'],ENT_QUOTES,"UTF-8")));	
$tipo = preparar_consulta(strtoupper(htmlentities($_POST['tipo'],ENT_QUOTES,"UTF-8")));
$serie_auto = preparar_consulta(strtoupper(htmlentities($_POST['serie_auto'],ENT_QUOTES,"UTF-8")));
$kilometraje = preparar_consulta(strtoupper(htmlentities($_POST['kilometraje'],ENT_QUOTES,"UTF-8")));
$tarjeta_circulacion = preparar_consulta(strtoupper(htmlentities($_POST['tarjeta_circulacion'],ENT_QUOTES,"UTF-8")));
$tarjeta_peaje = preparar_consulta(strtoupper(htmlentities($_POST['tarjeta_peaje'],ENT_QUOTES,"UTF-8")));
$tarjeta_gasolina = preparar_consulta(strtoupper(htmlentities($_POST['tarjeta_gasolina'],ENT_QUOTES,"UTF-8")));
$nip_tarjeta = preparar_consulta(strtoupper(htmlentities($_POST['nip_tarjeta'],ENT_QUOTES,"UTF-8")));
$poliza_seguro = preparar_consulta(strtoupper(htmlentities($_POST['poliza_seguro'],ENT_QUOTES,"UTF-8")));
//FOTOGRAFIA 1
$foto_frontal=$_FILES["foto_frontal"]["name"];
//echo "variable foto_frontal $foto_frontal<br>";
$ruta=$_FILES["foto_frontal"]["tmp_name"];
//echo "variable ruta $ruta<br>";
$destino_frontal="img/".$usuario_red.$foto_frontal;
//echo "variable destino $destino<br>";
copy($ruta, $destino_frontal);

//FOTOGRAFIA 2
$foto_frontal=$_FILES["foto_izq"]["name2"];
//echo "variable foto_frontal $foto_frontal<br>";
$ruta=$_FILES["foto_izq"]["tmp_name2"];
//echo "variable ruta $ruta<br>";
$destino_izq="img/".$usuario_red.$foto_izq;
//echo "variable destino $destino<br>";
copy($ruta, $destino_izq);

//FOTOGRAFIA 3
$foto_der=$_FILES["foto_der"]["name3"];
//echo "variable foto_frontal $foto_frontal<br>";
$ruta=$_FILES["foto_der"]["tmp_name3"];
//echo "variable ruta $ruta<br>";
$destino_der="img/".$usuario_red.$foto_der;
//echo "variable destino $destino<br>";
copy($ruta, $destino_der);

//FOTOGRAFIA 4
$foto_der=$_FILES["foto_atras"]["name4"];
//echo "variable foto_frontal $foto_frontal<br>";
$ruta=$_FILES["foto_atras"]["tmp_name4"];
//echo "variable ruta $ruta<br>";
$destino_atras="img/".$usuario_red.$foto_atras;
//echo "variable destino $destino<br>";
copy($ruta, $destino_atras);


	$consulta = "INSERT INTO autos (
										usuario_red,
										nombre_completo,
										area,
										mercado,
										coordinacion,
										marca_auto,
										modelo,
										tipo,
										serie_auto,
										kilometraje,
										tarjeta_circulacion,
										tarjeta_peaje,
										tarjeta_gasolina,
										nip_tarjeta,
										poliza_seguro,
										fecha,
										foto_frontal,
										foto_izq,
										foto_der,
										foto_atras
									
										
				) VALUES (
						'{$usuario_red}',
						'{$nombre_completo}',
						'{$area}',
						'{$mercado}',
						'{$coordinacion}',
						'{$marca_auto}',
						'{$modelo}',
						'{$tipo}',
						'{$serie_auto}',
						'{$kilometraje}',
						'{$tarjeta_circulacion}',
						'{$tarjeta_peaje}',
						'{$tarjeta_gasolina}',
						'{$nip_tarjeta}',
						'{$poliza_seguro}',
						NOW(),
						'{$foto_frontal}',
						'{$foto_der}',
						'{$foto_izq}',
						'{$foto_atras}'
						
						
				)";
	if(mysql_query($consulta,$conexion))
	{
		
//ID AUTOINCREMENT EN BASE DE DATOS

//2 USUARIO DE RED
$usuario_red = strtoupper(htmlentities($_POST['usuario_red']));
echo "<strong>USUARIO RED: </strong>" . "{$usuario_red} <br>";
//3 NOMBRE COMPLETO
$nombre_completo = strtoupper(htmlentities($_POST['nombre_completo']));
echo "<strong>NOMBRE COMPLETO: </strong>" . "{$nombre_completo} <br>";
//4 AREA
$area = strtoupper(htmlentities($_POST['area']));
echo "<strong>AREA: </strong>" . "{$area} <br>";
//5 MERCADO
$mercado = strtoupper(htmlentities($_POST['mercado']));
echo "<strong>MERCADO: </strong>" . "{$mercado} <br>";
//6 COORDINACION
$coordinacion = strtoupper(htmlentities($_POST['coordinacion']));
echo "<strong>COORDINACION: </strong>" . "{$coordinacion} <br>";  
//7 MARCA DE AUTO
$marca_auto = strtoupper(htmlentities($_POST['marca_auto']));
echo "<strong>MARCA DEL AUTO: </strong>" . "$marca_auto <br>";
//8 MODELO
$modelo = strtoupper(htmlentities($_POST['modelo']));
echo "<strong>MODELO: </strong>" . "$modelo <br>";
//9 TIPO
$tipo = strtoupper(htmlentities($_POST['tipo']));
echo "<strong>TIPO: </strong>" . "$tipo <br>";
//10 SERIE DEL AUTO
$serie_auto = strtoupper(htmlentities($_POST['serie_auto']));
echo "<strong>SERIE DEL AUTO: </strong>"."$serie_auto <br>";
//11 KILOMETRAJE
$kilometraje = strtoupper(htmlentities($_POST['kilometraje']));
echo "<strong>KILOMETRAJE: </strong>" . "$kilometraje <br>";
//11 TARJETA DE CIRCULACION
$tarjeta_circulacion = strtoupper(htmlentities($_POST['tarjeta_circulacion']));
echo "<strong>NUMERO DE TARJETA DE CIRCULACION: </strong>"."$tarjeta_circulacion <br>";
//12 TARJETA DE PEAJE
$tarjeta_peaje = strtoupper(htmlentities($_POST['tarjeta_peaje']));
echo "<strong>NUMERO DE TARJETA DE PEAJE: </strong>"."$tarjeta_peaje <br>";
//13 TARJETA DE GASOLINA
$tarjeta_gasolina = strtoupper(htmlentities($_POST['tarjeta_gasolina']));
echo "<strong>NUMERO DE TARJETA DE GASOLINA: </strong>"."$tarjeta_gasolina <br>";
//14 NIP TARJETA
$nip_tarjeta = strtoupper(htmlentities($_POST['nip_tarjeta']));
echo "<strong>NUMERO DE NIP DE LA TARJETA: </strong>"."$nip_tarjeta <br>";
//15 POLIZA DE SEGURO
$poliza_seguro = strtoupper(htmlentities($_POST['poliza_seguro']));
echo "<strong>NUMERO DE LA POLIZA DE SEGURO: </strong>"."$poliza_seguro <br>";

//16 FECHA

echo "<h3>Tu Registro se ha realizado Correctamente...</h3>";


mostrar_fotos_autos($usuario_red);


		exit;
	}
	else
	{

		echo "No se ha podido crear el curso: " . mysql_error();
		header("Location: index.php");

	}

//echo "<a href=\"index.html\">Salir</a>";

//header("Refresh:3; index.php");







//CERRAMOS LA CONEXION
include_once("footer.php");

?>