<?php
require_once("header.php");


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

foreach($query["clientes_cadastro"] as $clientes){
    if ($clientes["codigo_cliente_omie"] == $_COOKIE["cod_cli"]){










?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #exampleModal{
        z-index: 9999;
    }
	.circular--landscape { display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%; } 
	.circular--landscape img { width: auto; height: 100%; margin-left: -50px; }
		
  </style>
</head>
<body>
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Área do Cliente</h2>
          <h4>Código do cliente: <?php echo $clientes["codigo_cliente_omie"]; ?></h4>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Endereço:</h4>
                <p><?php echo $clientes["endereco"]; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Bairro:</h4>
                <p><?php echo $clientes["bairro"]; ?></p>
              </div>


              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="pedidos.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nome</label>
                    <select class="form-control">
                      <option><?php echo $clientes["razao_social"];?></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Cidade</label>
                  <select class="form-control">
                    <option><?php echo $clientes["cidade"];?></option>
                  </select>
                </div>
              </div>
              <div class="form-group">
              </div>
              <div class="form-group">
                
              </div>
              <div class="text-center"><button type="submit">Pedidos</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>





    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<?php

require_once("footer.php");
              }   
            }           
?>
</body>

</html>