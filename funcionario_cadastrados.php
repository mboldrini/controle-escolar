<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/navbar-static-top/ -->
<html lang="pt-br">
<head>
  <?php 

    include('./base/header.php');

  ?>
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
            <h1>Funcionários Cadastrados</h1>
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Cód</th>
                      <th>Nome</th>
                      <th>Função</th>
                      <th>Formação</th>
                      <th>Tel. Celular</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">597845</a>
                      </td>
                      <td>
                        <a href="#">João Silva Souza</a>
                      </td>
                      <td>
                        <a href="#">Professor</a>
                      </td>
                      <td>
                        <a href="#">Doutor</a>
                      </td>
                      <td>
                        (27) 9 9877-1424
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>

              
          </div>
        </div><!-- content central do site -->
    
  

      </div><!-- geral -->


      <!-- relacionado as nuvens que passam no fundo -->
      <link rel="stylesheet" href="./files/css/efeitos.css">


      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="./files/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="./files/js/ie10-viewport-bug-workaround.js"></script>


    </body></html>