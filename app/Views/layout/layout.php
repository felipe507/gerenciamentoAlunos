<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <script type="text/javascript" src="js/main.js"></script>

    <title>Gerencimento de aluno</title>
  </head>
  <body style="max-width: 100%;">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">Alunos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Adicionar</a>
            </li>
          </ul>
        </div>
    </nav>
  <!-- Modal Adicionar -->
  <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <form method="post" action="<?php echo base_url().'/aluno/adicionar'?>">
        <?= csrf_field() ?>
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Adicionar um aluno novo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <input class="form-control" name="nome" type="text" placeholder="Digite o nome">
                    <input class="form-control" name="telefone" type="number" placeholder="Telefone">
                    <input class="form-control" name="email" type="email" placeholder="Email">
                    <input class="form-control" name="cpf" type="number" placeholder="CPF">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
          </div>
        </form>
      </div>


    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>