<div class="container">
  <div class="card my-3">
    <div class="card-body">
      <div class="container">
        <div class="main-body">


          <div class="row gutters-sm">

            <div class="col-md-4 mb-3">
              <div class="">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php if ($publicacoes['img']) : ?>
                      <img src="/img/publicacoes/<?= $publicacoes['img'] ?>" alt="Admin" width="100%" height="250" style="border-radius: 10px">
                    <?php else : ?>
                      <img class="rounded-circle" width="150" height="150"" src=" /img/semfoto.jpg" style="border-radius: 10px" alt="">
                    <?php endif; ?>

                  </div>
                </div>
              </div>
              <div class=" mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Número de Autores</h6>
                    <span class="text-secondary"><?= $publicacoes['numautor'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Volume</h6>
                    <span class="text-secondary"><?= $publicacoes['volume'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Número</h6>

                    <span class="text-secondary"><?= $publicacoes['numero'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Páginas</h6>

                    <span class="text-secondary"><?= $publicacoes['paginas'] ?></span>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="mb-3">
                <div class="card-body">
                  <div class="row">

                    <h4><?= $publicacoes['titulo'] ?></h4>
                  </div>
                  <div class='row align-middle text-center'>

                    <select name="categoria" class="other-2" tabindex="-1" disabled>
                      <?php foreach ($categorias as $categorias_item) : ?>
                        <option <?php if ($categorias_item['id'] == $publicacoes['categoria']) {
                                  echo 'selected';
                                } ?>><?= $categorias_item['titulo'] ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>




                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="h-100">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Autores</h6>
                        </div>

                        <?= $publicacoes['autores'] ?>

                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Indexação Base</h6>
                        </div>
                        <?= $publicacoes['indexbase'] ?>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Revistas</h6>
                        </div>
                        <?= $publicacoes['revistas'] ?>
                      </div>
                      <hr>

                      <h6 class="d-flex align-items-center mb-3">Conteudo</h6>
                      <div class="text-secondary">
                        <?= $publicacoes['conteudo'] ?>
                      </div>



                    </div>
                  </div>
                </div>

              </div>
              <?php if (session()->get('logged_in')) : ?>
                <div class="text-center pt-4">
                  <a href="/admin/publicacoes/editar/<?= $publicacoes['id'] ?>" class="btn btn-primary btn-edit">

                    <i class="fas fa-edit"></i>

                  </a>
                  <a href="/admin/publicacoes/apagar/<?= $publicacoes['id'] ?>" class="btn btn-danger btn-edit" onClick="return confirm('Tem a certeza que quer Apagar a Publicação <?= $publicacoes['titulo'] ?> ?');">
                    <i class="fas fa-trash"></i>
                  </a>
                </div>
              <?php else : ?>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>