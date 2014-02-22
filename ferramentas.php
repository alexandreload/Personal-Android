<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Corpo & Saúde</title>
	    <link rel="stylesheet" href="css/foundation.css" />
	    <script src="js/vendor/modernizr.js"></script>
	    <script src="js/foundation/foundation.reveal.js"></script>
	</head>
	<body>
<script languange="javascript">
function imc() {
        var altura = document.imcform.altura.value;
        var peso = document.imcform.peso.value;
        
        if ((altura == "") || (peso == "")) {
                alert("É necessario indicar o seu peso e sua altura.");
                document.imcform.altura.focus();
        } else { 
                var quadrado = (altura * altura);
                var calculo = (peso/quadrado);
                document.imcform.result.value = calculo;
                
                if (calculo < 18.5) {
                    resul = "Você está abaixo do peso.\n\n";
                  } else if ((calculo > 18.4) && (calculo < 25)){
                      resul = "Seu peso está normal.\n\n";
                  } else if ((calculo > 24.9) && (calculo < 30)) {
                      resul = "Você está obeso.\n\n";
                  } else if ((calculo > 29.9) && (calculo < 35)) {
                      resul = "Você está muito acima do peso.\n\n";
                  } else if ((calculo > 34.9) && (calculo < 40)) {;
                  } else if (calculo >= 40) {
                }
        }
}
</script>



	<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Corpo & Saúde</h1>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Histórico</label></li>
        <li><a href="#">Séries</a></li>
        <li><a href="#">Dieta</a></li>
        <li><a href="ferramentas.php">Ferramentas</a></li>
        <li><a href="#">Resultados</a></li>      
      </ul>
    </aside>
 <div class="row">
 	<div class="medium-6 columns">
	<a href="#" class="button" data-reveal-id="imc">IMC</a>
  		<div class="reveal-modal" id="imc" data-reveal>
     		 <div class="row">
     		 		<form action="#" method="post" name="imcform" id="imcform">  
				  
						    <div class="large-4 columns">
						      <label>PESO (KG)
						        <input type="text" name="peso" placeholder="ex.:80" />
						      </label>
						    </div>
						    <div class="large-4 columns">
						      <label>Altura (CM)
						        <input type="text" name="altura" placeholder="ex.:180" />
						      </label>
						    </div>
						    <br>
						    <div class="row">
						    	 <div class="small-3 small-left columns">
						    	 	<a onclick="imc()" type="button" class="button [radius round]">Calcular</a>
						    	 </div>
						    </div>
		     		 			<a class="close-reveal-modal">x</a>
  					</form>
			</div>
  			
  	</div>
</div>
 
 <div class="medium-3 columns">
	<a href="#" class="button" data-reveal-id="myNormal">Percentual de gordura</a>
  		<div class="reveal-modal" id="myNormal" data-reveal>
     		 Modal
     		 <a class="close-reveal-modal">x</a>
  		</div>
  	</div>
</div>
	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	</body>
</html>
