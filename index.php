<!DOCTYPE html>
<meta charset="utf-8"/>
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

Escolha: <!--br /><input type="input" id="municipio_input" autofocus="true" /-->
<br><br>
        <div class="col-lg-12">
            <select class="form form-control" id="select_um" onchange="passoUm()">
                <option value="ESTADO">Rio Grande do Norte</option>
                <option value="MUNICIPIO">Municípios</option>
                <option value="MESORREGIAO">Mesorregiões</option>
                <option value="MICRORREGIAO">Microrregiões</option>
            </select>

            <div hidden id="div_municipios">
                <span>Municípios</span>
<br>
                <select class="form form-control" id="select_municipios">
                    <option value="0">SELECIONE</option>
                    <option value="ACARI">ACARI</option>
                    <option value="AÇU">AÇU</option>
                    <option value="AFONSO BEZERRA">AFONSO BEZERRA</option>
                    <option value="ÁGUA NOVA">ÁGUA NOVA</option>
					<option value="BARCELONA">BARCELONA</option>
					<option value="RIO DO FOGO">RIO DO FOGO</option>
                </select>
            </div>

            <div hidden id="div_mesorregioes">
                <span>Mesorregiões</span>
<br>
                <select class="form form-control" id="select_mesorregioes">
					<option value="0">SELECIONE</option>
                    <option value="AGRESTE POTIGUAR">AGRESTE POTIGUAR</option>
                    <option value="CENTRAL POTIGUAR">CENTRAL POTIGUAR</option>
                    <option value="LESTE POTIGUAR">LESTE POTIGUAR</option>
                    <option value="OESTE POTIGUAR">OESTE POTIGUAR</option>
                </select>
            </div>

            <div hidden id="div_microrregioes">
                <span>Mesorregiões</span>
<br>
                <select class="form form-control" id="select_microrregioes">
                    <option value="0">SELECIONE</option>
                    <option value="AGRESTE POTIGUAR">AGRESTE POTIGUAR</option>
                    <option value="ANGICOS">ANGICOS</option>
                    <option value="BAIXA VERDE">BAIXA VERDE</option>
                    <option value="BORBOREMA POTIGUAR">BORBOREMA POTIGUAR</option>
                </select>
            </div>
        </div>
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

	
	function passoUm()
        {
            if($("#select_um").val() == "ESTADO")
            {

                $("#div_municipios").hide();
                $("#div_mesorregioes").hide();
                $("#div_microrregioes").hide();
				
				$('#select_municipios').prop('selectedIndex',0);
				$('#select_mesorregioes').prop('selectedIndex',0);
				$('#select_microrregioes').prop('selectedIndex',0);
				
            }

            else if($("#select_um").val() == "MUNICIPIO")
            {

                $("#div_municipios").show();
                $("#div_mesorregioes").hide();
                $("#div_microrregioes").hide();

				$('#select_mesorregioes').prop('selectedIndex',0);
				$('#select_microrregioes').prop('selectedIndex',0);

            } else if ($("#select_um").val() == "MESORREGIAO")
            {

                $("#div_mesorregioes").show();
                $("#div_municipios").hide();
                $("#div_microrregioes").hide();

				$('#select_municipios').prop('selectedIndex',0);
				$('#select_microrregioes').prop('selectedIndex',0);

            } else if ($("#select_um").val() == "MICRORREGIAO")
            {
                $("#div_microrregioes").show();
                $("#div_municipios").hide();
                $("#div_mesorregioes").hide();

				$('#select_municipios').prop('selectedIndex',0);
				$('#select_mesorregioes').prop('selectedIndex',0);

            }
        }

	//Função para executar assim que a página for completamente carregada
	$(document).ready(function(){
	//	alert('Terminou de carregar a página');
	});

	$("#btn").click(function() {

		var select_um = $("#select_um").val();
		var municipio = $("#select_municipios").val();
		var mesorregiao = $("#select_mesorregioes").val();
		var microrregiao = $("#select_microrregioes").val();

		if(municipio != 0)
		{
			request_ajax(select_um, municipio);
		} else if (mesorregiao != 0)
		{
			request_ajax(select_um, mesorregiao);
		} else if(microrregiao != 0)
		{
			request_ajax(select_um, microrregiao)
		} else 
		{
			request_ajax(select_um, "")
		}
	});

	function request_ajax(select_um, select_dois)
	{
		$.ajax({
			type:'get', //metodo da requisição pode ser get ou post, mas vai variar de acordo com a necessidade
			//url:'arquivo_sem_classe.php?municipio_form=' + municipio_form + '&camada1='+camada1+'&camada2='+camada2+'&camada3='+camada3,
		
			url:'arquivo_sem_classe.php?municipio_form='+select_um+'&cidade_form='+select_dois,
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
	}

</script>