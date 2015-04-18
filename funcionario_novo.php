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

<title>Novo Funcionário - Painel</title>

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
      <div class="container-fluid content">  
        
        <!-- sidebar de menu vertical do painel -->
        <?php include('./base/sidebar.php'); ?>

        <!-- content do site! -->
        <div class="col-sm-9 col-md-9">    
          <div class="well">
            <h1>Cadastrar novo funcionário</h1>
              
              <form class="form-horizontal" name="funcionario_novo" action="" method="POST">

                <div class="form-group">
                  <label for="codigo" class="col-sm-2 control-label">Código:</label>
                    <div class="input-group col-md-3" data-validate="number">
                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="nome" class="col-sm-2 control-label">Nome:</label>
                  <div class="input-group col-md-5">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="sobrenome" class="col-sm-2 control-label">Sobrenome:</label>
                  <div class="input-group col-md-5">
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="data_nasc" class="col-sm-2 control-label">Data de Nasc.:</label>
                  <div class="input-group col-md-3">
                    <input type="date" class="form-control" name="data_nasc" id="data_nasc" placeholder="Optional">
                      <span class="input-group-addon info">
                        <span class="glyphicon glyphicon-asterisk"></span>
                      </span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email:</label>
                  <div class="input-group col-md-5" data-validate="email">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="formacao" class="col-sm-2 control-label">Formação:</label>
                    <div class="input-group col-md-3">
                      <select class="form-control" name="formacao" id="formacao" placeholder="Formação" required>
                        <option value="">Selecione uma opção</option>
                        <option value="1">Técnologo</option>
                        <option value="2">Graduação</option>
                        <option value="3">Pós-Graduação</option>
                        <option value="4">Mestrado</option>
                        <option value="5">Doutorado</option>
                        <option value="6">Outros</option>
                      </select>
                      <span class="input-group-addon danger">
                        <span class="glyphicon glyphicon-remove"></span>
                      </span>
                    </div>                 
                </div>

                <div class="form-group">
                  <label for="turno_trabalho" class="col-sm-2 control-label">Turno de Trabalho:</label>
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
                  <label for="nivel_acesso" class="col-sm-2 control-label">Nivel de acesso:</label>
                  <div class="input-group col-md-3">
                    <select class="form-control" name="formacao" id="formacao" placeholder="Formação" required>
                      <option value="">Nível de acesso</option>
                      <option value="1">Aluno</option>
                      <option value="2">Professor</option>
                      <option value="3">Ilimitado</option>
                    </select>
                    <span class="input-group-addon danger">
                      <span class="glyphicon glyphicon-remove"></span>
                    </span>
                  </div> 
                </div>

                <div class="form-group">
                  <label for="observacoes" class="col-sm-2 control-label">Observações:</label>
                  <div class="col-sm-5">
                    <textarea class="form-control" rows="3" id="observacoes" placeholder="Observações sobre o funcionário"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-4 col-md-3">
                    <button type="cancel" class="btn btn-danger btn-xs">
                      <span class="glyphicon glyphicon-remove">
                      </span>Cancelar
                    </button> 
                    <button type="submit" class="btn btn-primary">
                      <span class="glyphicon glyphicon-floppy-saved">
                      </span>Cadastrar  
                    </button>                                            
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