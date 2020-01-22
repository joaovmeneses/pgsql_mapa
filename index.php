<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
<body>

Por Favor insira o nome do Município abaixo!
<br>
<br>

Escolha:
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
 <!-- ACORDEON -->
 <div class="col-lg-12">
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Infraestrutura
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE TRANSMISSAO EXISTENTES" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Linhas de Transmissão Existentes
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="PARQUES EOLICOS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Parques Eólicos
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="SUBESTACAO CONTRATADAS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Subestação Contratadas
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="SUBESTACAO EXISTENTES" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Subestação Existentes
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE TRANSMISSAO PLANEJADAS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Linhas de Transmissão Planejadas
                                </label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Infraestrutura de Transportes
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Rodovias-DNIT
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estradas-IBGE
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aeródromos
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dutovias
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Ferrovias
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">Linhas de Cabotagem</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">Portos</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Camada 3
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    checkbox
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    checkbox
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    checkbox
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    checkbox
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    checkbox
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">checkbox</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

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

	function getCheckeds(name, lista)
    {
        $.each($("input[name='"+name+"']:checked"), function(){
            lista.push($(this).val());
        });

        return lista;
    }

    function Concluir()
    {
        
        //LISTAS
        var lista_infra_energia = [];
        var list_infra_transporte = [];
        
        //CHAMADA DAS FUNÇÕES
        lista_infra_energia = getCheckeds("infra_energia", lista_infra_energia);
        //lista_infra_transporte = getCheckeds("infra_transporte", lista_infra_transporte);
        
        //CONSOLE.LOG - tirar após os testes
        
        console.log(lista_infra_energia);
    }

</script>