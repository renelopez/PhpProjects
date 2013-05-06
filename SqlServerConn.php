<?php

$serverName = "USUARIO-HP";

try

{

  $conn = new PDO("sqlsrv:server=$serverName;Database=sample", "", "");

  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}

catch(Exception $e)

{

  die( print_r( $e->getMessage() ) );

}

$tsql = "SELECT * FROM [sample].[dbo].[employee]";

           

$getProducts = $conn->query($tsql);

$result = $getProducts->fetchAll(PDO::FETCH_BOTH);
  print_r($result);  //prints nothing


?>
