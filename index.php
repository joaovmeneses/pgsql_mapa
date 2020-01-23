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
                                <input class="form-check-input" type="checkbox" value="SUBESTACAO EXISTENTE" name="infra_energia">
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
                                <input class="form-check-input" type="checkbox" value="RODOVIAS-DNIT" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Rodovias-DNIT
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTRADAS-IBGE" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estradas-IBGE
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="AERODOMOS" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aeródromos
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DUTOVIAS" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dutovias
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="FERROVIAS" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Ferrovias
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE CABOTAGEM" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">Linhas de Cabotagem</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="PORTOS" name="infra_transporte">
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
                        Pontos de referencia
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DOPPLER" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Doppler
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTACAO POLIGONAL" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estação Poligonal
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTACAO GRAVIMETRICA" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estação Gravimétrica
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="GPS" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">
                                    GPS
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="REFERENCIA DE NIVEL" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Referencia de Nível
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="VERTICE DE TRIANGULACAO" name="pontos_referencia">
                                <label class="form-check-label" for="defaultCheck1">Vértice de Triangulação</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Geologia
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="AFLORAMENTO" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Afloramento
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTRACAO MINERAL" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estração Mineral
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DIQUE" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dique
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTRUTURA" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estrutura
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RIFT" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Rift
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LITOLOGIA" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">Litologia</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="GEOMORFOLOGIA" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">Geomorfologia</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>  

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Recursos Hídricos
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DRENAGENS-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Drenagens-ANA
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="HIDROGRAFIA INTEGRADA-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Hidrografia Integrada-ANA
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RESERVATORIOS-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Reservatórios-ANA
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DOMINIOS HIDROGEOLOGICOS" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Dominios Hidrogeologicos
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="POÇOS-CPRM" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Poços-CPRM
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ADUTORAS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Adutoras-SERHID</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="BACIAS HIDROGRAFICAS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Bácias Hidrográficas-SERHID</label>
                            </div>
                            
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="HIDROGRAFIA-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Hidrografia-SERHID
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="POÇOS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Poços-SERHID</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RESERVATORIOS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Reservatórios-SERHID</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>  

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Recurso Eólico
                      </button>
                    </h5>
                  </div>
                  <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="VELOCIDADE 200M" name="recurso_eolico">
                                <label class="form-check-label" for="defaultCheck1">
                                    Velocidade 200m
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="VELOCIDADE 100M" name="recurso_eolico">
                                <label class="form-check-label" for="defaultCheck1">
                                    Velocidade 100m
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="VELOCIDADE 50M" name="recurso_eolico">
                                <label class="form-check-label" for="defaultCheck1">
                                    Velocidade 50m
                                </label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>  

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Recurso Solar
                      </button>
                    </h5>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="AFLORAMENTO" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Difusa
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTRACAO MINERAL" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Direta
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DIQUE" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Foto Ativa
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ESTRUTURA" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Global
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RIFT" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Plano Inclinado
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LITOLOGIA" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">Usinas Fotovoltaicas</label>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>  

        </div>

<br>
<br>

 <input id="btn" type="button" value="Consultar" onclick="concluir()" />
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
			concluir(select_um, municipio);
		} else if (mesorregiao != 0)
		{
			concluir(select_um, mesorregiao);
		} else if(microrregiao != 0)
		{
			concluir(select_um, microrregiao)
		} else 
		{
			concluir(select_um, "")
		}
	});

	function request_ajax(select_um, select_dois, infra_energia, infra_transporte)
	{
		var url = 'http://localhost/lara_pgsql_mapa/pgsql_mapa/public/request';

		$.post(url, {"info1": select_um, "info2": select_dois, "infra_energia": infra_energia, "infra_transporte": infra_transporte }, function(data)
		{
			console.log(data);
		})

	}

	function getCheckeds(name, lista)	
    {
        $.each($("input[name='"+name+"']:checked"), function(){
            lista.push($(this).val());
        });

        return lista;
    }

    function concluir(select_um, select_dois)
    {
        
        //LISTAS
        var lista_infra_energia = [];
        var lista_infra_transporte = [];
        
        //CHAMADA DAS FUNÇÕES
        lista_infra_energia = getCheckeds("infra_energia", lista_infra_energia);
        lista_infra_transporte = getCheckeds("infra_transporte", lista_infra_transporte);
        
        //CONSOLE.LOG - tirar após os testes
        console.log("lista_infra_energia");
        console.log(lista_infra_energia);
		console.log("------------------");

		console.log("lista_infra_transporte");
        console.log(lista_infra_transporte);
		console.log("------------------")

        //Fazer o request
        request_ajax(
            select_um,
            select_dois, 
            lista_infra_energia, 
            lista_infra_transporte
            );
    }

</script>