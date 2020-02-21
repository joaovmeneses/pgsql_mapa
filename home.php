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

    <!-- RECURSO SOLAR -->
    Usinas Fotovoltaicas
    <br>
    <table id="table_usina_fotovoltaica" class="table">
    </table>

    <!-- GEOLOGIA -->
    Geologia
    <br>
    <table id="table_geologia" class="table">
    </table>
</div>

</html>

<script>

  function toPdf()
  {
    print();
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