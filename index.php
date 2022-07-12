<!DOCTYPE html>
<html>
<head>
	<title>Escorder uma Div</title>
</head>
<body>
<select id="tipo_pessoa" onchange="exibir_ocultar(this)">
    <option value="pesso_juridica">PJ</option>
    <option value="pessoa_fisica">PF</option>
	</select>
	<br/><br/>

	<div id="mostrarNome">Nome: <br/>
		<input type="text">
	</div>

	<div id="MostrarCpf">CPF: <br/>
		<input type="number">
	</div><br/>

	<div id="mostrarData1">Inicio: <br/>
		<input type="number">
	</div><br/>

	<div id="mostrarData2">Fim: <br/>
		<input type="text"></div>
	<br/>


</body>
<script type="text/javascript">
function exibir_ocultar(val) {
  if(val.value == 'pessoa_fisica') {
    document.getElementById('mostrarData1').style.display = 'none';
    document.getElementById('mostrarData2').style.display = 'none';
    document.getElementById('MostrarCpf').style.display = 'block';
    document.getElementById('mostrarNome').style.display = 'block';
  }
  else if(val.value == 'pesso_juridica') {
    document.getElementById('mostrarData1').style.display = 'block';
    document.getElementById('mostrarData2').style.display = 'block';
    document.getElementById('MostrarCpf').style.display = 'block';
    document.getElementById('mostrarNome').style.display = 'block';
  }
};
</script>
</html>