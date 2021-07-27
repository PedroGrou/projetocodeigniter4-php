<?php if (session()->get('admin_in')) : ?>


  <div class="jumbotron p-3 p-md-5 bg-dark newuse">
    <div class="col-md-6 p-4 opac">
      <h1 class="display-4 font-italic">Utilizadores</h1>
      <p class="lead my-3">Secção onde só o administrador é que pode visualizar se entrar com outro utilizador, não é possivel visualizar esta página</p>

    </div>
    <div class="col-md-6 pt-4">
      <a href="/admin/utilizadores/add" class="btn btn-info" style="border-radius:40px; color:#fff"><i class="fas fa-plus"></i> Adicionar Utilizadores</a>

    </div>
  </div>

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
                  <th><span>Utilizadores</span></th>
                  <th><span>Redes Sociais</span></th>
                  <th><span>Email</span></th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <?php foreach ($utilizadores as $utilizadores_item) : ?>
                <tbody>
                  <tr>

                    <td class="bg-white">
                      <?php if ($utilizadores_item['img']) : ?>
                        <img class="user_img" src="/img/utilizadores/<?= $utilizadores_item['img'] ?>" alt="">
                      <?php else : ?>
                        <img class="user_img" src="/img/semfoto.jpg" alt="">
                      <?php endif; ?>
                      <a href="/admin/utilizadores/utilizador/<?= $utilizadores_item['id'] ?>" class="user-link"><?= $utilizadores_item['user'] ?></a>
                      <span class="user-subhead"><?= $utilizadores_item['nome'] ?></span>
                    </td>

                    <td class="bg-white">
                      <?php if ($utilizadores_item['facebook']) : ?>
                        <a href="<?= $utilizadores_item['facebook'] ?>" class="table-link face">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php else : ?>
                        <a class="table-link facebook null">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php endif; ?>
                      <?php if ($utilizadores_item['twitter']) : ?>
                        <a href="<?= $utilizadores_item['twitter'] ?>" class="table-link twitter">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php else : ?>
                        <a class="table-link twitter null">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php endif; ?>
                      <?php if ($utilizadores_item['insta']) : ?>
                        <a href="<?= $utilizadores_item['insta'] ?>" class="table-link insta">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php else : ?>
                        <a class="table-link insta null">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php endif; ?>
                      <?php if ($utilizadores_item['youtube']) : ?>
                        <a href="<?= $utilizadores_item['youtube'] ?>" class="table-link youtube">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php else : ?>
                        <a class="table-link youtube null">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      <?php endif; ?>
                    </td>

                    <td class="bg-white">
                      <?php if ($utilizadores_item['email']) : ?>

                        <a><?= $utilizadores_item['email'] ?></a>

                      <?php else : ?>
                        <a>Não adicionou e-mail</a>

                      <?php endif; ?>
                    </td>
                    <td class="bg-white text-center">

                      <a href="/admin/utilizadores/utilizador/<?= $utilizadores_item['id'] ?>" class="table-link">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>

                      <a href="/admin/utilizadores/editar/<?= $utilizadores_item['id'] ?>" class="table-link">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-edit fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                      <a href="#" data-toggle="modal" data-target="#Modal<?= $utilizadores_item['id'] ?>" class="table-link">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-key fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                      <a href="/admin/utilizadores/apagar/<?= $utilizadores_item['id'] ?>" class="table-link danger" onClick="return confirm('Tem a certeza que quer Apagar o Utilizador <?= $utilizadores_item['user'] ?> ?');">
                        <span class="fa-stack">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fas fa-trash fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </td>

                  </tr>
                  <div class="modal fade" id="Modal<?= $utilizadores_item['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Mudar Password de - <?= $utilizadores_item['user'] ?></h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?= base_url('admin/utilizadores/mudarPass') ?>" method="post">



                            <div class="form-group">
                              <label for="password">Mudar Password</label>
                              <input class="form-control" type="password" name="password" />
                              <input type="hidden" name="id" value="<?= $utilizadores_item['id'] ?>" />
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


        <?php endforeach; ?>

        </tbody>
        </table>
        <?= $pager->links(); ?>
        </div>

      </div>
    </div>
  </div>
  </div>


<?php else : ?>
  <div class="container my-auto h-50">
    <div class="copyright text-center my-auto">
      <h1 class="h3 mb-4 text-center text-danger"><b>ACESSO NEGADO</b><br> </h1>
      <h1 class="h3 mb-4 text-gray-800 text-center">Não tem permissão para aceder a esta Página</h1>
    </div>
  </div>
<?php endif; ?>