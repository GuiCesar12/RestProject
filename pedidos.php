<?php
require_once("header.php");

//Lista pedidos
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://app.omie.com.br/api/v1/produtos/pedido/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"call" : "ListarPedidos",
"app_key": "2591729408268",
"app_secret":"826483885f57e8eb105bd6be0351dcf8",
"param":[
	{
        "pagina": 1,
        "registros_por_pagina": 10,
        "apenas_importado_api": "N"
    }
]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);



$pedido = json_decode($response, true);





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
		
#example_filter{
	padding-bottom: 10px;

}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: rgb(0, 0, 0);;
  color: white;
}
  </style>
</head>
<body>
  <br>
<div class="section-title">
      


  
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                      <div class="row">
                        <div class="lg-9-md-9"></div> 
                        <div class="lg-3-md-9">
                          <h5>
                            <a href="logout.php">Início</a>
                          </h5>
                        </div>
                      </div>
                        <table>

                         
                            <tr>
                                <th>N° Pedido</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Valor Total</th>
                            </tr>

                           
                            <?php 
                              foreach($pedido["pedido_venda_produto"] as $pedidos){
                                if($pedidos["cabecalho"]["codigo_cliente"] == $_COOKIE["cod_cli"]){
                                  
                                  

                                
                                  
                            ?>
                                <td><?php echo $pedidos["cabecalho"]["codigo_pedido"]; ?> </td>
                                <td><?php echo $pedidos["det"][0]["produto"]["descricao"]; ?> </td>
                                <td><?php echo $pedidos["det"][0]["produto"]["quantidade"]; ?></td>
                                <td>R$:<?php echo $pedidos["det"][0]["produto"]["valor_total"]; ?>,00</td>
                                <td></td>

                            </tr>
                          </div>
                          <?php                     }
          }
          ?>
                        </table>
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
              
?>
</body>

</html>
<?php exit;
?>