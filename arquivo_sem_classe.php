<?php
// $parametro1 = $_GET['parametro1'];
// $parametro2 = $_GET['parametro2'];

$municipio_valor = $_GET['municipio_form'];
$cidade_valor = $_GET['cidade_form'];

//$camada1 = $_GET['camada1'];
//$camada2 = $_GET['camada2'];
//$camada3 = $_GET['camada3'];



$host = '127.0.0.1';
$db='bancoamanda';
$username = 'Felipe';
$password = 'e0licas2013';
$dsn = "pgsql:host=$host;port=59924;dbname=$db;user=$username;password=$password";

$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES => false
        
];
 
try{
// create a PostgreSQL database connection
//$conn = new PDO($dsn);
$dbh = new PDO("pgsql:dbname=$db;host=$host", $username, $password ,$opt);
 
// display a message if connected to the PostgreSQL successfully
    if($dbh){
        //echo "Connected to the <strong>$db</strong> database successfully!";
        
        // $resultado=$dbh->query('SELECT aflorament FROM public."Afloramento" WHERE aflorament BETWEEN ' . $parametro1 . ' AND ' . $parametro2 . ';' );


       // $sql = "SELECT toponimia FROM public.\"Afloramento\" WHERE municipio = '" . $municipio_valor . "';";

    /*  $sql = "SELECT nome,p_out_kw FROM public.\"PARQUES_EOLICOS\" WHERE munic1 = '" . $municipio_valor . "';";
       $sql1 = "SELECT nome,proprietar,pot_kw FROM public.\"USINAS_FOTOVOLTAICAS\" WHERE munic = '" . $municipio_valor . "';";
       $sql2 = "SELECT localidade,prof__m_ FROM public.\"POCOS_SERHID\" WHERE municipio = '" . $municipio_valor . "';";
*/

     //   $sql3 = "SELECT * FROM public.\"__getaerodromo('MUNICIPIO','Mossoró')\"";


        $municipio='MUNICIPIO';
        $natal='NATAL';

        
       $sql3 = "SELECT * FROM  public.\"__get_parque_eolico\"('" . $municipio_valor . "','" . $cidade_valor . "')";




      /*  $resultado=$dbh->query($sql);
        $resultado1=$dbh->query($sql1);
        $resultado2=$dbh->query($sql2);
    */
        $resultado3=$dbh->query($sql3);
        
   /*    
       echo "<b>Parques Eólicos</b>"."<br><br>";
        foreach($resultado as $resultado){
            echo json_encode($resultado)."<br><br>";
        } 
        echo "<b>Usinas Fotovoltaicas</b>"."<br><br>";

        foreach($resultado1 as $resultado1){
            echo json_encode($resultado1)."<br><br>";
        } 
        echo "<b>Poços SERHID</b>"."<br><br>";

        foreach($resultado2 as $resultado2){
            echo json_encode($resultado2)."<br><br>";
        } 
        

   */

     
        foreach($resultado3 as $resultado3){
            echo json_encode($resultado3)."<br><br>";
        } 


      

    }


} catch (PDOException $e){
    // report error message
    echo $e->getMessage();
}

?>