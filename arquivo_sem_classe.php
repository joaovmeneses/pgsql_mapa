<?php

$municipio_valor = $_GET['municipio_form'];
$cidade_valor = $_GET['cidade_form'];

//informações do banco
$host = '127.0.0.1';
$db='bancoamanda';
$username = 'Felipe';
$password = 'e0licas2013';
$dsn = "pgsql:host=$host;port=59924;dbname=$db;user=$username;password=$password";

$opt = [ 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES => false
        ];
 
try{
$dbh = new PDO("pgsql:dbname=$db;host=$host", $username, $password ,$opt);
 
    if($dbh)
    {

       $sql3 = "SELECT * FROM  public.\"__get_parque_eolico\"('" . $municipio_valor . "','" . $cidade_valor . "')";

        $request=$dbh->query($sql3);
        foreach($request as $row){
            echo json_encode(array('1' => $row));
        }
        
    }

} catch (PDOException $e){
    // report error message
    echo $e->getMessage();
}

?>