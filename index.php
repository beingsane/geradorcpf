<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GERADOR CPF ONLINE</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		body{
			padding:20px;
		}
		input{
			height: 100px !important;
			font-size:70px !important;
			text-align:center;
		}
		input.check{
			height:14px !important;
		}
	</style>
	
	</head>
	<body>
		<h1><b><span class="label label-default">GERADOR</span> <span class="label label-danger">CPF</span> </b></h1>
		<p>
			GERADOR CPF VÁLIDOS PARA TESTES
		</p>
		<div class="row jumbotron">
			<div class="col-md-3">
			</div>	
			<div class="col-md-6">
				<p style="text-align:center;"> 
					<input type="text" id="gencpf" class="form-control" value=""/>
				</p>
				<p style="text-align:center;">
					<button type="button" class="btn btn-primary btn-lg" onclick="gerarCPF();">
					  <span class="glyphicon glyphicon-flash" aria-hidden="true" ></span> GERAR NOVO!
					</button>
				</p>
				<p style="text-align:center;">
					<span><input type="checkbox" name="gencpfcompontos" class="check gencpfcompontos" checked="true" ><span> Gerar com pontos (máscara)?	
				</p>
			</div>	
			<div class="col-md-3">
			</div>
		</div>
		<p>
			<span class="label label-danger">ATENÇÃO!</span> 
			Este <b>gerador de CPF</b> tem objetivo de gerar um número válido pares testes deo softwares por exemplo.
			<br>
			É uma ferramenta para Analistas de Sistema, Programadores, estudantes, arquitetos e testadores de sistemas 
			e qualquer que pressoa que precise de um número de CPF ficcticio para testar um cadastro de algum sistema.
			Muitos desenvolvedores de sistema precisão disto em suas fases de testes.
			<BR><b>USO INDEVIDO DISTO PARA FINS CRIMINOSOS OU INDEVIDOS É REPUDIÁVEL, É CRIME E NÓS NÃO NOS RESPONSABILIZAMOS POR ESTES ATOS DE TERCEIROS.</b>
		</p>
		<script>
		function randomiza(n) {
			var ranNum = Math.round(Math.random()*n);
			return ranNum;
		}
		function mod(dividendo,divisor) {
			return Math.round(dividendo - (Math.floor(dividendo/divisor)*divisor));
		}
		function gerarCPF() {
			comPontos = document.querySelector('.gencpfcompontos').checked;
		  
			var n = 9;
			var n1 = randomiza(n);
			var n2 = randomiza(n);
			var n3 = randomiza(n);
			var n4 = randomiza(n);
			var n5 = randomiza(n);
			var n6 = randomiza(n);
			var n7 = randomiza(n);
			var n8 = randomiza(n);
			var n9 = randomiza(n);
			var d1 = n9*2+n8*3+n7*4+n6*5+n5*6+n4*7+n3*8+n2*9+n1*10;
			d1 = 11 - ( mod(d1,11) );
			if (d1>=10) d1 = 0;
			var d2 = d1*2+n9*3+n8*4+n7*5+n6*6+n5*7+n4*8+n3*9+n2*10+n1*11;
			d2 = 11 - ( mod(d2,11) );
			if (d2>=10) d2 = 0;
			retorno = '';
			if (comPontos) cpf = ''+n1+n2+n3+'.'+n4+n5+n6+'.'+n7+n8+n9+'-'+d1+d2;
			else cpf = ''+n1+n2+n3+n4+n5+n6+n7+n8+n9+d1+d2;
		
			document.getElementById('gencpf').value = (cpf);
		}
		gerarCPF();
		</script>
  </body>
</html>