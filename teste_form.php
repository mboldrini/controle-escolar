<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/navbar-static-top/ -->
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="http://getbootstrap.com/favicon.ico">

<title>Painel</title>

<!-- Bootstrap core CSS -->
<link href="./files/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="./files/css/navbar-static-top.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="./files/js/ie-emulation-modes-warning.js"></script>
<script src="./files/js/bootstrap.js"></script>

<!--parte visual -->
<link rel="stylesheet" href="./files/css/bootstrap-glyphicons.css">
<script src="./files/js/modernizr-2.6.2.min.js"></script>

<link rel="stylesheet" href="./files/css/visual.css">
<script src="./files/js/jquery.min.js"></script>
<script type="text/javascript" src="./files/js/funcoes.js"></script>
</head>
<body> 

      <!-- responsável por mostrar a nav-bar -->
      <?php include('./base/nav.php'); ?>

      <!-- container da coisa toda -->
      <div class="container-fluid">  
        
        <!-- sidebar de menu vertical do painel -->
        <?php include('./base/sidebar.php'); ?>

        <!-- content do site! -->
        <div class="col-sm-9 col-md-9">    
          <div class="well">
            <h1>Pessoa a ser Exibida</h1>
              
            <form method="post">

              <div class="form-group">
                <label for="validate-text">TEXTO</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="TEXTO" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
              </div>


              <div class="form-group">
                <label for="validate-optional">Opcional</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
                      <span class="input-group-addon info">
                        <span class="glyphicon glyphicon-asterisk"></span>
                      </span>
                  </div>
              </div>



              <div class="form-group">
                <label for="validate-email">Email</label>
                  <div class="input-group" data-validate="email">
                    <input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Email" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
              </div>

              <div class="form-group">
                <label for="validate-phone">Telefone</label>
                  <div class="input-group" data-validate="phone">
                    <input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(00) 0000-0000" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
              </div>


              <div class="form-group">
                <label for="validate-length">Quantidade Minima</label>
                  <div class="input-group" data-validate="length" data-length="1">
                    <textarea type="text" class="form-control" name="validate-length" id="validate-length" placeholder="Quantidade minima" required></textarea>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
              </div>


              <div class="form-group">
                <label for="validate-select">Item Selecionado</label>
                  <div class="input-group">
                    <select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>
                      <option value="">Select an item</option>
                      <option value="item_1">Item 1</option>
                      <option value="item_2">Item 2</option>
                      <option value="item_3">Item 3</option>
                    </select>
                    <span class="input-group-addon danger">
                      <span class="glyphicon glyphicon-remove"></span>
                    </span>
                  </div>
              </div>


              <div class="form-group">
                <label for="validate-number">Numero Válido</label>
                  <div class="input-group" data-validate="number">
                    <input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
              </div>


            </form>
             
              
          </div>
        </div><!-- content central do site -->
    
  

      </div><!-- geral -->


      <!-- relacionado as nuvens que passam no fundo -->
      <link rel="stylesheet" href="./files/css/efeitos.css">


      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="./files/js/jquery.min.js"></script>
      <script src="./files/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="./files/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>