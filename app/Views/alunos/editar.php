        <form method="post" action="<?php echo base_url().'/aluno/atualizar/'.  $data['aluno']['alunos_id']?>">
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
                    <input class="form-control d-none" name="id" value="<?php echo $data['aluno']['alunos_id']?>" type="string" placeholder="CPF" >
                    <input class="form-control"  name="nome" value="<?php echo $data['aluno']['nome']?>" type="string" placeholder="CPF">
                    <input class="form-control" name="telefone" value="<?php echo $data['aluno']['telefone']; ?>" type="string" placeholder="Telefone">
                    <input class="form-control" name="email" value="<?php echo $data['aluno']['email']?>" type="email" placeholder="Email">
                    <input class="form-control" name="cpf" value="<?php echo $data['aluno']['cpf']?>" type="number" placeholder="CPF">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
          </div>
        </form>

