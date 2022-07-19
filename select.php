<?php


//Lista clientes
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://app.omie.com.br/api/v1/geral/clientes/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"call" : "ListarClientes",
"app_key": "2591729408268",
"app_secret":"826483885f57e8eb105bd6be0351dcf8",
"param":[
	{
		"pagina":0,
		"registros_por_pagina": 500,
		"apenas_importado_api":"N"
	}
]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


$query = json_decode($response, true);

  foreach($query["clientes_cadastro"] as $cliente){
           if($_GET["cpf"] == $cliente["cnpj_cpf"]){
           
           
          setcookie("cod_cli",$cliente["codigo_cliente_omie"],time() + (10 * 365 * 24 * 60 * 60),"/");
          header("Location:dadoscli.php");
           }



      
    

  }







?>
