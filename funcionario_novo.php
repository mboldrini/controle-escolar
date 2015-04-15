<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/navbar-static-top/ -->
<html lang="pt-br">
<head>

<?php include('./base/header.php') ?>

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
            <h1>Cadastrar novo funcionário</h1>
              
              <form class="form-horizontal">

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Código:</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="IDDDDDDDD" placeholder="Código">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Nome:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="IDDDDDDDD" placeholder="Nome">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Sobrenome:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="IDDDDDDDD" placeholder="Sobrenome">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Data de Nasc.:</label>
                      <div class="col-sm-3">
                        <input type="date" class="form-control" id="IDDDDDDDD">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Email:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="IDDDDDDDD" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Formação:</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="AAAAAAAAAA">
                          <option value="">--</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Data de Contratação:</label>
                      <div class="col-sm-3">
                        <input type="date" class="form-control" id="IDDDDDDDD">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Formação:</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="AAAAAAAAAA">
                          <option value="">--</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Turno de Trabalho:</label>
                        <div class="col-sm-6 checkbox">
                          <label>
                            <input type="checkbox" value="mat">Matutino
                          </label>
                          <label>
                            <input type="checkbox" value="ves">Vespertino
                          </label>
                          <label>
                            <input type="checkbox" value="not">Noturno
                          </label>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Tipo de Contrato:</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="AAAAAAAAAA">
                          <option value="">--</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                          <option value="1">AAAAA</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FORRRRRRRR" class="col-sm-2 control-label">Término do Contrato:</label>
                      <div class="col-sm-3">
                        <input type="date" class="form-control" id="IDDDDDDDD">
                      </div>
                    </div>
                    

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked="true"> Ativo
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Cadastrar</button>
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
      <script src="./files/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="./files/js/ie10-viewport-bug-workaround.js"></script>


    </body></html>