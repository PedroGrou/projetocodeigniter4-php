<div class="jumbotron p-3 p-md-5 text-white bg-dark newcat">
  <div class="col-md-6 p-4">
    <h1 class="display-4 font-italic">Categorias</h1>
    <p class="lead my-3">Todas as categorias que existem para cada publicação, se ainda não exister a categoria ou tipo de publicação que deseja crie, edite ou apague</p>

  </div>
  <div class="col-md-6 pt-4">
    <a href="#" data-toggle="modal" data-target="#Modal" class="btn btn-outline-info" style="border-radius:40px; color:#fff"><i class="fas fa-plus"></i> Adicionar Categoria</a>
  </div>
</div>

<div class="container-fluid">

  <?php if ($msg) : ?>
    <div class="p-3 my-3 alert-info">
      <?= $msg ?>
    </div>

  <?php endif; ?>

  <div class="p-3 my-3 text-danger">
    <?= \Config\Services::validation()->listErrors(); ?>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-box clearfix bg-white" style="border-radius: 8px;">
          <div class="table-responsive">
            <table class="table user-list">
              <thead>
                <tr>
                  <th><span>Categorias</span></th>

                  <th>&nbsp;</th>
                </tr>
              </thead>



              <tbody>
                <?php foreach ($categorias as $categorias_item) : ?>
                  <tr role="row" class="odd">
                    <td class="bg-white"><?= $categorias_item['titulo'] ?></td>
                    <td class="bg-white text-center">
                      <a href="#" data-toggle="modal" data-target="#Modal<?= $categorias_item['id'] ?>" class="table-link">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-pen fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                      <a href="/admin/categorias/apagar/<?= $categorias_item['id'] ?>" class="table-link danger" onClick="return confirm('Tem a certeza que quer Apagar a Categoria <?= $categorias_item['titulo'] ?> ?');">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-trash fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </td>


                  </tr>
                  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?= base_url('admin/categorias/gravar') ?>" method="post">



                            <div class="form-group">
                              <label for="titulo">Titulo</label>
                              <input class="form-control" type="input" name="titulo" />
                            </div>

                            <div class="form-group">
                              <label for="resumo">Resumo</label>
                              <input class="form-control" type="input" name="resumo" />
                            </div>



                            <?= csrf_field(); ?>
                        </div>

                        <div class="text-center pb-4">
                          <button type="button" data-dismiss="modal" class="btn btn-danger btn-model"><i class="fas fa-times"></i></button>
                          <button type="submit" name="submit" class="btn btn-info btn-model"><i class="fas fa-check"></i></button>

                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
          </div>
          <div class="modal fade" id="Modal<?= $categorias_item['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Categoria - <?= $categorias_item['titulo'] ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('admin/categorias/gravar') ?>" method="post">



                    <div class="form-group">
                      <label for="titulo">Titulo</label>
                      <input class="form-control" type="input" name="titulo" value="<?= $categorias_item['titulo'] ?>" />
                    </div>

                    <div class="form-group">
                      <label for="resumo">Resumo</label>
                      <input class="form-control" type="input" name="resumo" value="<?= $categorias_item['resumo'] ?>" />
                    </div>

                    <input type="hidden" value="<?= $categorias_item['id'] ?>" name="id" />



                    <?= csrf_field(); ?>
                </div>
                <div class="text-center pb-4">
                  <button type="button" data-dismiss="modal" class="btn btn-danger btn-model"><i class="fas fa-times"></i></button>
                  <button type="submit" name="submit" class="btn btn-info btn-model"><i class="fas fa-check"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

      </tbody>
      </table>
      <?= $pager->links(); ?>
      </div>
    </div>
  </div>

</div>

</div>