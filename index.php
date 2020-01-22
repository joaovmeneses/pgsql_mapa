<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

Página antes de carregar:
<br>
<br>

Página depois de clicar no botão: <input id="btn" type="button" value="Botão do Ajax" />
<br>
<br>
O resultado vai aparecer aqui abaixo:

<div id="resultado">
	resultado inicial
</div>

</body>
</html>
<script>
	//Função para executar assim que a página for completamente carregada
	$(document).ready(function(){
		alert('Terminou de carregar a página');
	});

	//Função de acessar o ajax após clicar no botão
	$("#btn").click(function() {
		alert('O botão foi clicado');

		//Requisição ajax
		$.ajax({
			type:'get', //metodo da requisição pode ser get ou post, mas vai variar de acordo com a necessidade
			url:'arquivo_sem_classe.php?parametro1=semClasse&parametro2=Raphael', // url que você quer fazer a requisição
			success: function(resultado_do_arquivo_sem_classe){
				$("#resultado").html(resultado_do_arquivo_sem_classe); //JQuery que vai fazer alterações na página em tempo real
			}	
		});
	});

</script>