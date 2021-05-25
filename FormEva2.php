<!DOCTYPE html>
<html>
<head>
	<title>Evaluacion 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>	
	<form name="eva" action="LogicaEva1y2.php" method="GET">
	<input type="hidden" name="evalu" value="eva2">
	<input type="hidden" name="id" value="<?php echo $_GET['doc']?>"/>
	<h1>SEGUNDA EVALUACION</h1>
	</br>
	<h4><b>Responda el siguiente cuestionario y envielo con el boton que se encuentra en para parte inferior</b></h4>
	<br/>
	<br/>

	<label><b>Pregunta 1:</b>Qué numero continua con la secuencia:</label>
	<br/>
	<p>20,21,17,26,10....</p>
	<input type="radio" name="uno" value="venti5"/>
	<label>25</label>
	<br/>
	<input type="radio" name="uno" value="trein2"/>
	<label>32</label>
	<br/>
	<input type="radio" name="uno" value="trein5"/>
	<label>35</label>  <!--esta  -->
	<br/>
	<input type="radio" name="uno" value="cua2"/>
	<label>42</label>
	<br/>
	<br/>


	<label><b>Pregunta 2:</b> 8 volquetes transladan 400 m3 de polvo en 3h 20min ¿Cuantos volquetes son necesarios para transladar la misma cantidad de polvo en 1h 40min?</label>
	<br/></br>
	<input type="radio" name="dos" value="ocho"/>
	<label>8</label>
	<br/>
	<input type="radio" name="dos" value="doce"/>
	<label>12</label>
	<br/>
	<input type="radio" name="dos" value="diez6"/>
	<label>16</label>
	<br/>
	<input type="radio" name="dos" value="diez8"/>
	<label>18</label>
	<br/>
	<br/>


	<label><b>Pregunta 3:</b> ...es día como ... es de noche</label>
	<br/></br>
	<input type="radio" name="tres" value="cO"/>
	<label>Claridad - Opacidad</label>
	<br/>
	<input type="radio" name="tres" value="bO"/>
	<label>Brillar - Opaco</label>
	<br/>
	<input type="radio" name="tres" value="rO"/>
	<label>Resplandor - Oscuridad</label>
	<br/>
	<input type="radio" name="tres" value="clO"/>
	<label>Claridad - Oscuridad</label>
	<br/>
	<br/>


	<label><b>Pregunta 4:</b>Un caracol decidió subir a un árbol de 15m de altura. Durante cada día tenía tiempo de subir 5m; pero mientras dormia por la noche, bajaba 4m ¿Al cabo de cuantós días llegará a la cima del árbol?</label>
	<br/></br>
	<input type="radio" name="cuatro" value="once"/>
	<label>11</label>
	<br/>
	<input type="radio" name="cuatro" value="quince"/>
	<label>15</label>
	<br/>
	<input type="radio" name="cuatro" value="cin"/>
	<label>5</label>
	<br/>
	<input type="radio" name="cuatro" value="dies"/>
	<label>10</label>
	<br/>
	<br/>


	<label><b>Pregunta 5:</b> Completa la serie Q 7 S 12 O 17 W 22 ??</label>
	<br/></br>
	<input type="radio" name="cinco" value="zV"/>
	<label>Z,25</label>
	<br/>
	<input type="radio" name="cinco" value="xV"/>
	<label>X,26</label>
	<br/>
	<input type="radio" name="cinco" value="vV"/>
	<label>V,28</label>
	<br/>
	<input type="radio" name="cinco" value="yV"/>
	<label>Y,27</label>
	<br/>
	<br/>
	<button type="submit" name="enviar2">Enviar</button>
	</form>
</body>
</html>