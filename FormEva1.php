<html>
<head>
	<title>Evalucion 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>	
	<form name="eva" action="LogicaEva1y2.php" method="GET">
	<input type="hidden" name="id" value="<?php echo $_GET['doc'] ?>"/>
	<input type="hidden" name="evalu" value="eva1"/>
	<h1>PRIMERA EVALUACION</h1>
	</br>
	<h4><b>Responda el siguiente cuestionario y envielo con el boton que se encuentra en para parte inferior</b></h4>
	<br/><br/>

	<label><b>Pregunta 1:</b> Para usted el SENA es:</label>
	<br/></br>
	<input type="radio" name="uno" value="rio"/>
	<label>Un rio de china</label>
	<br/>
	<input type="radio" name="uno" value="insti"/>
	<label>Una institucion de formacion</label>
	<br/>
	<input type="radio" name="uno" value="barrio"/>
	<label>Un barrio de Santiago de Cali</label>
	<br/>
	<input type="radio" name="uno" value="nunguna1"/>
	<label>Ninguna de las anteriores</label>
	<br/><br/>


	<label><b>Pregunta 2:</b> ¿Que es una solucion de sofware?</label>
	<br/></br>
	<input type="radio" name="dos" value="pegante"/>
	<label>Un pegante para computadores</label>
	<br/>
	<input type="radio" name="dos" value="progr"/>
	<label>Un programa que soluciona algo</label>
	<br/>
	<input type="radio" name="dos" value="pegajoso"/>
	<label>Un programa pegajoso</label>
	<br/>
	<input type="radio" name="dos" value="nunguna2"/>
	<label>Ninguna</label>
	<br/><br/>


	<label><b>Pregunta 3:</b> La suma de la raiz cuadrada de 144 y 56 es</label>
	<br/><br/>
	<input type="number" name="tres"  step="0.001" />
	<br/><br/>


	<label><b>Pregunta 4:</b> Cual es la capital del pais Patagonia</label>
	<br/></br>
	<input type="radio" name="cuatro" value="argentina"/>
	<label>Argentina</label>
	<br/>
	<input type="radio" name="cuatro" value="quito"/>
	<label>Quito</label>
	<br/>
	<input type="radio" name="cuatro" value="buenoaire"/>
	<label>Buenos Aire</label>
	<br/>
	<input type="radio" name="cuatro" value="nopais"/>
	<label>Patagonia no es un pais</label>
	<br/><br/>


	<label><b>Pregunta 5:</b> De los siguientes eliga el dia de hoy</label>
	<br/><br/>
	<select name="semana">
		<option value="1">Lunes</option>
		<option value="2">Martes</option>
		<option value="3">Miercoles</option>
		<option value="4">Jueves</option>
		<option value="5">Viernes</option>
		<option value="6">Sabado</option>
		<option value="0">Domingo</option>
	</select>
	<br/><br/>
	<button type="submit" name="enviar1">Enviar</button>
	</form>
</body>
</html>