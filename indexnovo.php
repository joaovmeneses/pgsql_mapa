<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

Por Favor insira o nome do Município abaixo!
<br>
<br>

<!-- <input type="input" id="valor_form" autofocus="true" /> -->
<!-- <input type="input" id="valor_form2"/> -->

Município: <br /><input type="input" id="municipio_input" autofocus="true" />
<br><br>
Cidade: <br /><input type="input" id="cidade_input" autofocus="true" />

<!--CAMADA1: <br /><input type="input" id="camada1_input" autofocus="true" />
CAMADA2: <br /><input type="input" id="camada2_input" autofocus="true" />
CAMADA3: <br /><input type="input" id="camada3_input" autofocus="true" />-->



<br>
<br>

 <input id="btn" type="button" value="Consultar" />
<br>
<br>

<div id="resultado">
	resultado inicial
</div>

</body>
</html>
<script>
	//Função para executar assim que a página for completamente carregada
	$(document).ready(function(){
	//	alert('Terminou de carregar a página');
	});

	//Função de acessar o ajax após clicar no botão
	$("#btn").click(function() {
		// alert('O botão foi clicado');

		// var valor_do_form = $("#valor_form").val();
		// var valor_do_form2 = $("#valor_form2").val();

		var municipio_form = $("#municipio_input").val();
		var cidade_form = $("#cidade_input").val();

	//	var camada1 = $("#camada1_input").val();
	//	var camada2 = $("#camada2_input").val();
	//	var camada3 = $("#camada3_input").val();



		//Requisição ajax
		$.ajax({
			type:'get', //metodo da requisição pode ser get ou post, mas vai variar de acordo com a necessidade
			//url:'arquivo_sem_classe.php?municipio_form=' + municipio_form + '&camada1='+camada1+'&camada2='+camada2+'&camada3='+camada3,
		
			url:'arquivo_sem_classe.php?municipio_form='+municipio_form+'&cidade_form='+cidade_form,
			//url:'arquivo_sem_classe.php?parametro1=' + valor_do_form + '&parametro2=' + valor_do_form2, // url que você quer fazer a requisição
			success: function(resultado_do_arquivo_sem_classe){

				if (resultado_do_arquivo_sem_classe != 0) {
				$("#resultado").html(resultado_do_arquivo_sem_classe); //JQuery que vai fazer alterações na página em tempo real
				    $("#resultado1").html(resultado_do_arquivo_sem_classe); //JQuery que vai fazer alterações na página em tempo real
					$("#resultado2").html(resultado_do_arquivo_sem_classe); //JQuery que vai fazer alterações na página em tempo real
		
					$("#resultado3").html(resultado_do_arquivo_sem_classe); //JQuery que vai fazer alterações na página em tempo real
				} else {
					$("#resultado").html("Não houve resultado de acordo com os seus parametros"); //JQuery que vai fazer alterações na página em tempo real
				}

			}	
		});
	});

</script>