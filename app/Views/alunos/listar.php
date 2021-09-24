    <hr>
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-8">          
          <h1 class="text-center display-4" style="font-size: 40px;">Gerenciamento de Alunos</h1>
        </div>
        <div class="col-4 justify-content-center align-self-center">
          <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Adicionar</button>   
        </div>
      </div>
    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm">
            <div class="table-responsive"> 
              <table class="table table-striped" style="width: 100%;max-width: 100%;">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Cpf</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data['alunos'] as $aluno):?>
                    <tr>
                      <td>
                        <?php echo $aluno["nome"] ?>
                      </td>

                      <td>
                        <?php echo $aluno["telefone"] ?>
                      </td>

                      <td>
                        <?php echo $aluno["email"] ?>
                      </td>

                      <td>
                        <?php echo $aluno["cpf"] ?>
                      </td>
                   
                      <td class="d-flex">    
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirModal">
                          <i class="far fa-trash-alt"></i>
                        </button>
                        <button class="btn btn-info btn-sm mr-1" data-toggle="modal" data-target="#editarModal">
                          <i class="fas fa-edit"></i>
                        </button>
                      </td>
                    </tr>
                    <?php endforeach?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
          
          </div>
        </div>
    
      </div>
     

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

      <!-- Modal Excluir -->
      <div class="modal" tabindex="-1" role="dialog" id="excluirModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmar exclusão</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <button type="button" class="btn btn-primary">Sim</button>
            </div>
          </div>
        </div>
      </div>

       <!-- Modal Editar -->
       <div class="modal" tabindex="-1" role="dialog" id="editarModal">
        <form method="post" action="<?php echo base_url().'/aluno/editar'?>">
        <?= csrf_field() ?>
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Editar Aluno</h5>
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
                  <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
          </div>
        </form>
      </div>