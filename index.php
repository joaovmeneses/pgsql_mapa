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
                    <option value="">SELECIONE</option>
                </select>
            </div>

            <div hidden id="div_mesorregioes">
                <span>Mesorregiões</span>
<br>
                <select class="form form-control" id="select_mesorregioes">
					<option value="">SELECIONE</option>
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
                    <option value="">SELECIONE</option>
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
                        
                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE TRANSMISSAO EXISTENTES" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Linhas de Transmissão Existentes
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="PARQUES EOLICOS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Parques Eólicos
                                </label>
                            </div>

                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="SUBESTACAO CONTRATADAS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Subestação Contratadas
                                </label>
                            </div>

                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="SUBESTACAO EXISTENTE" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Subestação Existentes
                                </label>
                            </div>

                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE TRANSMISSAO PLANEJADAS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Linhas de Transmissão Planejadas
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="USINAS FOTOVOLTAICAS" name="infra_energia">
                                <label class="form-check-label" for="defaultCheck1">Usinas Fotovoltaicas</label>
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
                        
                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="RODOVIAS-DNIT" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Rodovias-DNIT
                                </label>
                            </div>
                            <br>
                        
                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="ESTRADAS-IBGE" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Estradas-IBGE
                                </label>
                            </div>
                            <br>

                            <div class="col-lg-12">
                                <input class="form-check-input" type="checkbox" value="AERODOMOS" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aeródomos
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

                            <!--div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="LINHAS DE CABOTAGEM" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">Linhas de Cabotagem</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="PORTOS" name="infra_transporte">
                                <label class="form-check-label" for="defaultCheck1">Portos</label>
                            </div-->

                        </div>
                    </div>
                  </div>
                </div>

                <!--div class="card">
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
              </div-->

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
                                <input class="form-check-input" type="checkbox" value="RECURSOS MINERAIS" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Recursos Minerais
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="EXTRACAO MINERAL" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Extração Mineral
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
                                <input class="form-check-input" type="checkbox" value="GEOMORFOLOGIA LINEAR" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">Geomorfologia Linear</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="GEOMORFOLOGIA PONTO" name="geologia">
                                <label class="form-check-label" for="defaultCheck1">Geomorfologia Ponto</label>
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
                                <input class="form-check-input" type="checkbox" value="DOMINIOS HIDROGEOLOGICOS-CPRM" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Domínios Hidrogeológicos (CPRM)
                                </label>
                            </div>
                            
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="POCOS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Poços-SERHID</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="POCOS-CPRM" name="recursos_hidricos">
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
                                <input class="form-check-input" type="checkbox" value="BALANCO HIDRICO-SNIRH" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Balanço Hídrico (SNIRH)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA MEDIA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas (CPRM: Média Anual 1977 a 2006)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA JAN" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Janeiro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA FEV" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Fevereiro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA MAR" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Março (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA ABR" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Abril (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA MAI" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Maio (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA JUN" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Junho (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA JUL" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Julho (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA AGO" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Agosto (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA SET" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Setembro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA OUT" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Outubro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA NOV" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Novembro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA DEZ" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas Mensal Dezembro (CPRM)</label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="ISOIETA MMA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1"> Isoietas (MMA) </label>
                            </div>
                      
                            <!--div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="HIDROGRAFIA INTEGRADA-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Hidrografia Integrada-ANA
                                </label>
                            </div>


                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="HIDROGRAFIA-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Hidrografia-SERHID
                                </label>
                            </div>
      
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DRENAGENS-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Drenagens-ANA
                                </label>
                            </div-->
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RESERVATORIOS-ANA" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">
                                    Reservatórios-ANA
                                </label>
                            </div>

                            <!--div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="RESERVATORIOS-SERHID" name="recursos_hidricos">
                                <label class="form-check-label" for="defaultCheck1">Reservatórios-SERHID</label>
                            </div-->

                        </div>
                    </div>
                  </div>
                </div>  

                <!--div class="card">
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
                </div-->  

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
                                <input class="form-check-input" type="checkbox" value="HORIZONTAL" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Irradiação solar global horizontal em Wh/m².dia
                                </label>
                            </div>
                        
                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DIRETA" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Irradiação solar direta normal em Wh/m².dia
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="DIFUSA" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Irradiação solar difusa em Wh/m².dia
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="FOTOSSINTETICAMENTE ATIVA" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Irradiação solar fotossinteticamente ativa em Wh/m².dia
                                </label>
                            </div>

                            <div class="col-lg-2">
                                <input class="form-check-input" type="checkbox" value="PLANO INCLINADO" name="recurso_solar">
                                <label class="form-check-label" for="defaultCheck1">
                                    Irradiação solar no plano inclinado na latitude em Wh/m².dia
                                </label>
                            </div-->


                        </div>
                    </div>
                  </div>
                </div>  

        </div>

<br>
<br>

 <input id="btn" type="button" value="Consultar"/>
<br>
<br>

</body>
</html>
<script>

    var url = '../lara_pgsql_mapa/pgsql_mapa/public/';
	//Função para executar assim que a página for completamente carregada e montar os selects
	$(document).ready(function(){
        //get Municipios
        $.get(url+'getcidades', function(data)
        {
            createSelect(data, "select_municipios", 'nm_municip');
            console.log(data);
        });
        //get Microrregioes
        $.get(url+'getmicrorregioes', function(data)
        {
            createSelect(data, "select_microrregioes", 'nm_micro');
        });
	});

    //Função para montas os selects dinamicos
    function createSelect(lista, id_select, atributo)
    {
        for(var i = 0; i < lista.length; i++)
        {
            var option = "<option value='" +lista[i][atributo]+ "'>" +lista[i][atributo]+ "</option>"; //criar tag option
            $("#"+id_select).append(option); 
        }
    }

	//Alteração dos selects
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

    
    function concluir(select_um, select_dois)
    {
        
        //LISTAS
        var infra_energia = [];
        var infra_transporte = [];
        //var pontos_referencia = [];
        var geologia = [];
        var recursos_hidricos = [];
        //var recurso_eolico = [];
        var recurso_solar = [];


        //CHAMADA DAS FUNÇÕES
        infra_energia = getCheckeds("infra_energia", infra_energia);
        infra_transporte = getCheckeds("infra_transporte", infra_transporte);
        //pontos_referencia = getCheckeds("pontos_referencia", pontos_referencia);
        geologia = getCheckeds("geologia", geologia);
        recursos_hidricos = getCheckeds("recursos_hidricos", recursos_hidricos);
        //recurso_eolico = getCheckeds("recurso_eolico", recurso_eolico);
        recurso_solar = getCheckeds("recurso_solar", recurso_solar);

        
        //Fazer o request
        request_ajax(
            select_um,
            select_dois, 
            infra_energia, 
            infra_transporte,
            //pontos_referencia,
            geologia,
            recursos_hidricos,
            //recurso_eolico,
            recurso_solar,
            parent.array_coords
            );
    }

    //requisição na API
    function request_ajax(select_um, select_dois, infra_energia, infra_transporte, /*pontos_referencia,*/ geologia, recursos_hidricos,/* recurso_eolico,*/ recurso_solar, coordenadas)
	{
		var url = 'http://localhost/lara_pgsql_mapa/pgsql_mapa/public/request';

		$.post(url, {"info1": select_um, "info2": select_dois, "infra_energia": infra_energia, "infra_transporte": infra_transporte, "geologia" : geologia, "recurso_solar" : recurso_solar,
        /*"pontos_referencia" : pontos_referencia,*/ "recursos_hidricos" : recursos_hidricos,/* "recurso_eolico" : recurso_eolico,*/ polygon: coordenadas }, function(data)
		{
            console.log(data);
            // ### Montar Table Infra Energia ###
            if (typeof data['Infraestrutura Energia'] !== 'undefined')
            {   

                //Verificar LINHAS DE TRANSMISSÃO EXISTENTES
                if (typeof data['Infraestrutura Energia']['LINHAS DE TRANSMISSAO EXISTENTES'] !== 'undefined')
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['LINHAS DE TRANSMISSAO EXISTENTES'], "table_linhas_existentes");
                } else 
                {
                    $("#table_linhas_existentes").empty();
                }

                //Verificar PARQUES EÓLICOS
                if (typeof data['Infraestrutura Energia']['PARQUES EOLICOS'] !== 'undefined')
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['PARQUES EOLICOS'], "table_parques_eolicos");
                } else 
                {
                    $("#table_parques_eolicos").empty();
                }

                //Verificar SUBESTAÇÃO CONTRATADA
                if (typeof data['Infraestrutura Energia']['SUBESTACAO CONTRATADAS'] !== 'undefined')
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['SUBESTACAO CONTRATADAS'], "table_subestacao_contratada");
                } else 
                {
                    $("#table_subestacao_contratada").empty();
                }

                //Verificar SUBESTACAO EXISTENTE
                if (typeof data['Infraestrutura Energia']['SUBESTACAO EXISTENTE'] !== 'undefined')
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['SUBESTACAO EXISTENTE'], "table_subestacao_existente");
                } else 
                {
                    $("#table_subestacao_existente").empty();
                }

                //Verificar LINHAS DE TRANSMISSÃO PLANEJADAS
                if (typeof data['Infraestrutura Energia']['LINHAS DE TRANSMISSAO PLANEJADAS'] !== 'undefined')
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['LINHAS DE TRANSMISSAO PLANEJADAS'], "table_linhas_planejadas");
                } else 
                {
                    $("#table_linhas_planejadas").empty();
                }

                if (typeof data['Infraestrutura Energia']['USINAS FOTOVOLTAICAS'] !== 'undefined') 
                {
                    montarTableLinhas_Subestacoes(data['Infraestrutura Energia']['USINAS FOTOVOLTAICAS'], "table_usinas_fotovoltaicas");
                } else 
                {
                    $("#table_usina_fotovoltaica").empty();
                }

            } else 
            {   //Apagar tables se n forem selecionadas
                $("#table_linhas_existentes").empty();
                $("#table_parques_eolicos").empty();
                $("#table_subestacao_contratada").empty();
                $("#table_subestacao_existente").empty();
                $("#table_linhas_planejadas").empty();
                $("#table_usina_fotovoltaica").empty();

            }

            // ### Montar table Infra Transporte ###
            if (typeof data['Infraestrutura Transporte'] !== 'undefined')
            {   
                
                //Verificar RODOVIAS-DNIT
                if (typeof data['Infraestrutura Transporte']['RODOVIAS-DNIT'] !== 'undefined')
                {
                    montarTableInfraTransporte(data['Infraestrutura Transporte']['RODOVIAS-DNIT'], "tipo", "table_rodovias_dnit");
                } else 
                {
                    $("#table_rodovias_dnit").empty();
                }

                //Verificar ESTRADAS-IBGE
                if (typeof data['Infraestrutura Transporte']['ESTRADAS-IBGE'] !== 'undefined')
                {
                    montarTableInfraTransporte(data['Infraestrutura Transporte']['ESTRADAS-IBGE'], "tipo", "table_estradas_ibge");
                } else 
                {
                    $("#table_estradas_ibge").empty();
                }

                //Verificar AERÓDOMOS
                if (typeof data['Infraestrutura Transporte']['AERODOMOS'] !== 'undefined')
                {
                    montarTableInfraTransporte(data['Infraestrutura Transporte']['AERODOMOS'], "cod_uso", "table_aerodomos");
                } else 
                {
                    $("#table_aerodomos").empty();
                }

                //Verificar DUTOVIAS
                if (typeof data['Infraestrutura Transporte']['DUTOVIAS'] !== 'undefined')
                {
                    montarTableInfraTransporte(data['Infraestrutura Transporte']['DUTOVIAS'], "tipo", "table_dutovias");
                } else 
                {
                    $("#table_dutovias").empty();
                }

                //Verificar FERROVIAS
                if (typeof data['Infraestrutura Transporte']['FERROVIAS'] !== 'undefined')
                {
                    montarTableInfraTransporte(data['Infraestrutura Transporte']['FERROVIAS'], "tipo", "table_ferrovias");
                } else 
                {
                    $("#table_ferrovias").empty();
                }

            } else 
            {   //Apagar tables se n forem selecionadas
                $("#table_rodovias_dnit").empty();
                $("#table_estradas_ibge").empty();
                $("#table_aerodomos").empty();
                $("#table_dutovias").empty();
                $("#table_ferrovias").empty();

            }

            // ### Montar table Geologia ###
            if (typeof data['Geologia'] !== 'undefined') 
            {
                if (typeof data['Geologia']['GEOMORFOLOGIA LINEAR'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['GEOMORFOLOGIA LINEAR'], 'table_geomorfologia_linear');
                } else 
                {
                    $("#table_geomorfologia_linear").empty();
                }

                if (typeof data['Geologia']['GEOMORFOLOGIA PONTO'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['GEOMORFOLOGIA PONTO'], 'table_geomorfologia_ponto');
                } else 
                {
                    $("#table_geomorfologia_ponto").empty();
                }

                if (typeof data['Geologia']['AFLORAMENTO'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['AFLORAMENTO'], 'table_afloramento');
                } else 
                {
                    $("#table_afloramento").empty();
                }

                if (typeof data['Geologia']['RECURSOS MINERAIS'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['RECURSOS MINERAIS'], 'table_recursos_minerais');
                } else 
                {
                    $("#table_recursos_minerais").empty();
                }

                if (typeof data['Geologia']['RIFT'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['RIFT'], 'table_rift');
                } else 
                {
                    $("#table_rift").empty();
                }

                if (typeof data['Geologia']['ESTRUTURA'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['ESTRUTURA'], 'table_estrutura');
                } else 
                {
                    $("#table_estrutura").empty();
                }

                if (typeof data['Geologia']['DIQUES'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['DIQUES'], 'table_diques');
                } else 
                {
                    $("#table_diques").empty();
                }

                if (typeof data['Geologia']['EXTRACAO MINERAL'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['EXTRACAO MINERAL'], 'table_extracao_mineral');
                } else 
                {
                    $("#table_extracao_mineral").empty();
                }

                if (typeof data['Geologia']['LITOLOGIA'] !== 'undefined') 
                {
                    montarTableGeologia(data['Geologia']['LITOLOGIA'], 'table_litologia');
                } else 
                {
                    $("#table_litologia").empty();
                }

            } else 
            {
                $("#table_geologia").empty();
                $("#table_recursos_minerais").empty();
                $("#table_afloramento").empty();
                $("#table_geomorfologia_ponto").empty();
                $("#table_geomorfologia_linear").empty();

            }


            // ### Montar table Usinas Fotovoltaicas ###
            if (typeof data['Recurso Solar'] !== 'undefined') 
            {
                console.log(data['Recurso Solar']);
                if (typeof data['Recurso Solar']['HORIZONTAL'] !== 'undefined') 
                {
                    montarTableRecursoSolar(data['Recurso Solar']['HORIZONTAL'], 'table_irradiacao_solar_horizontal');
                } else 
                {
                    $("#table_irradiacao_solar_horizontal").empty();
                }

                if (typeof data['Recurso Solar']['DIRETA'] !== 'undefined') 
                {
                    montarTableRecursoSolar(data['Recurso Solar']['DIRETA'], 'table_irradiacao_solar_direta');
                } else 
                {
                    $("#table_irradiacao_solar_direta").empty();
                }

                if (typeof data['Recurso Solar']['DIFUSA'] !== 'undefined') 
                {
                    montarTableRecursoSolar(data['Recurso Solar']['DIFUSA'], 'table_irradiacao_solar_difusa');
                } else 
                {
                    $("#table_irradiacao_solar_difusa").empty();
                }

                if (typeof data['Recurso Solar']['FOTOSSINTETICAMENTE ATIVA'] !== 'undefined') 
                {
                    montarTableRecursoSolar(data['Recurso Solar']['FOTOSSINTETICAMENTE ATIVA'], 'table_irradiacao_solar_fotossinteticamente');
                } else 
                {
                    $("#table_irradiacao_solar_fotossinteticamente").empty();
                }

                if (typeof data['Recurso Solar']['PLANO INCLINADO'] !== 'undefined') 
                {
                    montarTableRecursoSolar(data['Recurso Solar']['PLANO INCLINADO'], 'table_irradiacao_solar_plano_inclinado');
                } else 
                {
                    $("#table_irradiacao_solar_plano_inclinado").empty();
                }
            } else 
            {
                $("#table_irradiacao_solar_horizontal").empty();
                $("#table_irradiacao_solar_direta").empty();
                $("#table_irradiacao_solar_difusa").empty();
                $("#table_irradiacao_solar_fotossinteticamente").empty();
                $("#table_irradiacao_solar_plano_inclinado").empty();

            }

            if (typeof data['Recursos Hídricos'] !== 'undefined') 
            {
                console.log(data['Recursos Hídricos']);
                if (typeof data['Recursos Hídricos']['DOMINIOS HIDROGEOLOGICOS-CPRM'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['DOMINIOS HIDROGEOLOGICOS-CPRM'], 'table_dominios_hidrogeologicos_cprm');
                } else 
                {
                    $("#table_dominios_hidrogeologicos_cprm").empty();
                }

                if (typeof data['Recursos Hídricos']['POCOS-SERHID'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['POCOS-SERHID'], 'table_pocos_serhid');
                } else 
                {
                    $("#table_pocos_serhid").empty();
                }

                if (typeof data['Recursos Hídricos']['POCOS-CPRM'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['POCOS-CPRM'], 'table_pocos_cprm');
                } else 
                {
                    $("#table_pocos_cprm").empty();
                }

                if (typeof data['Recursos Hídricos']['ADUTORAS-SERHID'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['ADUTORAS-SERHID'], 'table_adutoras_serhid');
                } else 
                {
                    $("#table_adutoras_serhid").empty();
                }

                if (typeof data['Recursos Hídricos']['BACIAS HIDROGRAFICAS-SERHID'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['BACIAS HIDROGRAFICAS-SERHID'], 'table_bacias_hidrograficas_serhid');
                } else 
                {
                    $("#table_bacias_hidrograficas_serhid").empty();
                }
                
                if (typeof data['Recursos Hídricos']['ANCO HIDRICO-SNIRH'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['ANCO HIDRICO-SNIRH'], 'table_balanco_hidrico_snirh');
                } else 
                {
                    $("#table_balanco_hidrico_snirh").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA MEDIA'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA MEDIA'], 'table_isoietas_media');
                } else 
                {
                    $("#table_isoietas_media").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA JAN'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA JAN'], 'table_isoietas_jan');
                } else 
                {
                    $("#table_isoietas_jan").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA FEV'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA FEV'], 'table_isoietas_fev');
                } else 
                {
                    $("#table_isoietas_fev").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA MAR'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA MAR'], 'table_isoietas_mar');
                } else 
                {
                    $("#table_isoietas_mar").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA ABR'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA ABR'], 'table_isoietas_abr');
                } else 
                {
                    $("#table_isoietas_abr").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA MAI'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA MAI'], 'table_isoietas_mai');
                } else 
                {
                    $("#table_isoietas_mai").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA JUN'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA JUN'], 'table_isoietas_jun');
                } else 
                {
                    $("#table_isoietas_jun").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA JUL'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA JUL'], 'table_isoietas_jul');
                } else 
                {
                    $("#table_isoietas_jul").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA AGO'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA AGO'], 'table_isoietas_ago');
                } else 
                {
                    $("#table_isoietas_ago").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA SET'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA SET'], 'table_isoietas_set');
                } else 
                {
                    $("#table_isoietas_set").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA OUT'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA OUT'], 'table_isoietas_out');
                } else 
                {
                    $("#table_isoietas_out").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA NOV'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA NOV'], 'table_isoietas_nov');
                } else 
                {
                    $("#table_isoietas_nov").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA DEZ'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA DEZ'], 'table_isoietas_dez');
                } else 
                {
                    $("#table_isoietas_dez").empty();
                }

                if (typeof data['Recursos Hídricos']['ISOIETA MMA'] !== 'undefined') 
                {
                    montarTableIsoietas(data['Recursos Hídricos']['ISOIETA MMA'], 'table_isoietas_mma');
                } else 
                {
                    $("#table_isoietas_mma").empty();
                }

                if (typeof data['Recursos Hídricos']['RESERVATORIOS-ANA'] !== 'undefined') 
                {
                    montarTableRecursosHidricos(data['Recursos Hídricos']['RESERVATORIOS-ANA'], 'table_reservatorios_ana');
                } else 
                {
                    $("#table_reservatorios_ana").empty();
                }

                

            } else 
            {
                $("#table_dominios_hidrogeologicos_cprm").empty();
                $("#table_pocos_serhid").empty();
                $("#table_pocos_cprm").empty();
                $("#table_adutoras_serhid").empty();
                $("#table_bacias_hidrograficas_serhid").empty();
                $("#table_balanco_hidrico_snirh").empty();
                $("#table_isoietas_media").empty();
                $("#table_isoietas_jan").empty();
                $("#table_isoietas_fev").empty();
                $("#table_isoietas_mar").empty();
                $("#table_isoietas_abr").empty();
                $("#table_isoietas_mai").empty();
                $("#table_isoietas_jun").empty();
                $("#table_isoietas_jul").empty();
                $("#table_isoietas_ago").empty();
                $("#table_isoietas_set").empty();
                $("#table_isoietas_out").empty();
                $("#table_isoietas_nov").empty();
                $("#table_isoietas_dez").empty();
                $("#table_isoietas_mma").empty();
                $("#table_reservatorios_ana").empty();
            }

            if (typeof data['Personalizado'] !== 'undefined')
            {
                montarTableRecursosHidricos(data['Personalizado'], "table_polygon");
            }

            parent.toPdf();

            //print();


		});

	}
    
    //Verificar checkboxes selecionados
	function getCheckeds(name, lista)	
    {
        $.each($("input[name='"+name+"']:checked"), function(){
            lista.push($(this).val());
        });

        return lista;
    }

    // [#] MONTAR TABLES
    
    //Usina Fotovoltaica
	function montarTableRecursoSolar(lista, table_id)
    {
        //var table = $("#table_usina_fotovoltaica");
        var table = $('#'+table_id, parent.document);
        table.empty();
        table.append("<th>MÉDIA</th>");
        table.append("<th>MÁXIMO</th>");
        table.append("<th>MINIMO</th>");
        for(var i = 0; i < lista.length; i++)
        {
            //Criar linha para a tabela
            var tr = document.createElement('tr');
            //criar celulas
            var td_media = document.createElement('td');
            var td_max = document.createElement('td');
            var td_min = document.createElement('td');
            //Adicionar valores no td
            td_media.append(lista[i]["media"]);
            td_max.append(lista[i]["maximo"]);
            td_min.append(lista[i]["minimo"]);
            //Adiciona o td no tr
            tr.append(td_media);
            tr.append(td_max);
            tr.append(td_min);
            //Adiciona o tr na table
            table.append(tr);

        }
    }

    //Recursos Hídricos
    function montarTableRecursosHidricos(lista, table_id)
    {
        var table = $("#"+table_id, parent.document);
        table.empty();
        table.append("<th>TIPO</th>");
        table.append("<th>TOTAL</th>");
        for(var i = 0; i < lista.length; i++)
        {
            //Criar linha para a tabela
            var tr = document.createElement('tr');
            //criar celulas
            var td_tipo = document.createElement('td');
            var td_total = document.createElement('td');
            //Adicionar valores no td
            td_tipo.append(lista[i]["tipo"]);
            td_total.append(lista[i]["total"]);
            //Adiciona o td no tr
            tr.append(td_tipo);
            tr.append(td_total);
            //Adiciona o tr na table
            table.append(tr);

        }
    }

    //Recursos Hídricos - ISOIETAS
    function montarTableIsoietas(lista, table_id)
    {
        var table = $("#"+table_id, parent.document);
        table.empty();
        table.append("<th>TIPO</th>");
        for(var i = 0; i < lista.length; i++)
        {
            //Criar linha para a tabela
            var tr = document.createElement('tr');
            //criar celulas
            var td_tipo = document.createElement('td');
            //Adicionar valores no td
            td_tipo.append(lista[i]["tipo"]);
            //Adiciona o td no tr
            tr.append(td_tipo);
            //Adiciona o tr na table
            table.append(tr);

        }
    }

    //Geologia
    function montarTableGeologia(lista, table_id)
    {
        var table = $("#"+table_id, parent.document);
        table.empty();
        table.append("<th>TIPO</th>");
        table.append("<th>TOTAL</th>");
        for(var i = 0; i < lista.length; i++)
        {
            //Criar linha para a tabela
            var tr = document.createElement('tr');
            //criar celulas
            var td_tipo = document.createElement('td');
            var td_total = document.createElement('td');
            //Adicionar valores no td
            td_tipo.append(lista[i]["tipo"]);
            td_total.append(lista[i]["total"]);
            //Adiciona o td no tr
            tr.append(td_tipo);
            tr.append(td_total);
            //Adiciona o tr na table
            table.append(tr);

        }
    }

    //Infraestrutura Transportes
    function montarTableInfraTransporte(lista, tipo, table_id)
    {
        //var table = $("#"+table_id);
        var table = $("#"+table_id, parent.document);
        table.empty();
        table.append("<th>TIPO</th>");
        table.append("<th>TOTAL</th>");
        for(var i = 0; i < lista.length; i++)
        {
            //Criar linha para a tabela
            var tr = document.createElement('tr');
            //criar celulas
            var td_tipo = document.createElement('td');
            var td_total = document.createElement('td');
            //Adicionar valores no td
            td_tipo.append(lista[i][tipo]);
            td_total.append(lista[i]["total"]);
            //Adiciona o td no tr
            tr.append(td_tipo);
            tr.append(td_total);
            //Adiciona o tr na table
            table.append(tr);

        }
    }

    //Infraestrutura Energia
    function montarTableLinhas_Subestacoes(lista, table_id)
    {
        //var table = $("#"+table_id);
        var table = $("#"+table_id, parent.document);
        table.empty();
        table.append("<th>TIPO</th>");
        table.append("<th>TOTAL</th>");
        for(var i = 0; i < lista.length; i++)
        {
    
            console.log('ok');
            //Criar linha para a tabela
            var tr = document.createElement('tr');

            //criar celulas
            var td_tipo = document.createElement('td');
            var td_total = document.createElement('td');

            //Adicionar valores no td
            td_tipo.append(lista[i]["tipo"]);
            td_total.append(lista[i]["total"]);
                
            //Adiciona o td no tr
            tr.append(td_tipo);
            tr.append(td_total);

            //Adiciona o tr na table
            table.append(tr);

        }
    }


</script>

<!-- CSS -->
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}


</style>