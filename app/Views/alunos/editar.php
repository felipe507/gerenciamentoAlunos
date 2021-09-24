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
                    <input class="form-control" value="<?php var_dump($data['aluno']); ?>" type="number" placeholder="Telefone">
                    <input class="form-control" value="<?php var_dump($data['aluno'])?>" type="email" placeholder="Email">
                    <input class="form-control" value="<?php var_dump($data['aluno'])?>" type="number" placeholder="CPF">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
          </div>
        </form>

