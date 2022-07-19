<?php 
require_once("header.php");



?>


<head>
<script>
    function mascara_cpf(){
        

        var cpf = document.getElementById('cpf')
            if(cpf.value.length == 3 || cpf.value.length == 7){
                cpf.value += '.'
            }
            if(cpf.value.length == 11){
                cpf.value += '-'
            }
     
    }

    function mascara_cnpj(){
        var cnpj = document.getElementById('cnpj')
        if(cnpj.value.length == 2 || cnpj.value.length == 6){
                cnpj.value += '.'
            }
            if(cnpj.value.length == 10){
                cnpj.value += '/'
            }
            if(cnpj.value.length == 15){
                cnpj.value += '-'
            }
    }





</script>
</head>

<style>
    #exampleModal{
        z-index: 9999;
    }
	.circular--landscape { display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%; } 
	.circular--landscape img { width: auto; height: 100%; margin-left: -50px; }


</style>		



<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Área do cliente</h2>
          <h3>Insira o CPF ou CNPJ do cliente.</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-6 mt-lg-0 d-flex align-items-stretch">
                <form action="select.php" method="get" role="form" class="php-email-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">CPF</label>
                      <input type="text" id ="cpf" name="cpf"  autocomplete="off" maxlength="14" onkeyup="mascara_cpf()">
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                  </div>
                </form>
              </div>

              <div class="col-lg-6 mt-6 mt-lg-0 d-flex align-items-stretch">
                <form action="select1.php" method="get" role="form" class="php-email-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">CNPJ</label>
                      <input type="text" id ="cnpj" name="cnpj"  autocomplete="off" maxlength="18" onkeyup="mascara_cnpj()">
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                  </div>
                </form>
              </div>





        </div>
        </div>
</section>






    <?php require_once("footer.php");
    ?>

