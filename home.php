<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
  </head>
  <body>
    <iframe src="http://localhost/pgsql_mapa/index.php" width="800px" height="800px"></iframe>
  </body>

  <div id="resultado">
    <!-- INFRA ENERGIA -->
    Linhas de Transmissão Existentes
    <br>
    <table id="table_linhas_existentes" class="table">
    </table>

    Parques Eólicos
    <br>
    <table id="table_parques_eolicos" class="table">
    </table>

    Subestação Contratadas
    <br>
    <table id="table_subestacao_contratada" class="table">
    </table>

    Subestação Existentes
    <br>
    <table id="table_subestacao_existente" class="table">
    </table>

    Linhas de Transmissão Planejadas
    <br>
    <table id="table_linhas_planejadas" class="table">
    </table>
    
    <!-- INFRA TRANSPORTE -->
    Rodovias-DNIT
    <br>
    <table id="table_rodovias_dnit" class="table">
    </table>

    Estradas-IBGE
    <br>
    <table id="table_estradas_ibge" class="table">
    </table>

    Aeródomos
    <br>
    <table id="table_aerodomos" class="table">
    </table>

    Ferrovias
    <br>
    <table id="table_ferrovias" class="table">
    </table>

    Dutovias
    <br>
    <table id="table_dutovias" class="table">
    </table>
    
    <!-- RECURSO SOLAR -->
    Usinas Fotovoltaicas
    <br>
    <table id="table_usinas_fotovoltaicas" class="table">
    </table>

    <!-- GEOLOGIA -->
    Geomorfologia Linear
    <br>
    <table id="table_geomorfologia_linear" class="table">
    </table>

    Geomorfologia Ponto
    <br>
    <table id="table_geomorfologia_ponto" class="table">
    </table>

    Diques
    <br>
    <table id="table_diques" class="table">
    </table>

    Rift
    <br>
    <table id="table_rift" class="table">
    </table>

    Estrutura
    <br>
    <table id="table_estrutura" class="table">
    </table>

    Afloramento
    <br>
    <table id="table_afloramento" class="table">
    </table>

    Recursos Minerais
    <br>
    <table id="table_recursos_minerais" class="table">
    </table>

    Litologia
    <br>
    <table id="table_litologia" class="table">
    </table>

    Extração Mineral
    <br>
    <table id="table_extracao_mineral" class="table">
    </table>
</div>

</html>

<script>

  function toPdf()
  {
    //print();
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