<div class="jumbotron p-3 p-md-5 text-white bg-dark newback">
  <div class="col-md-6 p-4 ">
    <h1 class="display-4 font-italic">Stuff Publicações</h1>
    <p class="lead my-3">Stuff Publicações é ideal para quem quer conhecer e explorar novos conhecimentos, para quem quer criar, mudar, editar e transformar, descubra mais</p>

  </div>
  <div class="col-md-6 pt-4">
    <?php if (session()->get('logged_in')) : ?>
      <a href="/admin/publicacoes" class="btn btn-outline-info" style="border-radius:40px; color:#fff"><i class="fas fa-edit"></i> Editar Publicaçoes</a>
    <?php else : ?>
      <a href="/sobre" class="btn btn-outline-info" style="border-radius:40px; color:#fff"><i class="fas fa-info-circle"></i> Saber Mais</a>
    <?php endif; ?>
  </div>

</div>


<div class="container-fluid">

  <div class="p-3 my-3 text-danger">
    <?= \Config\Services::validation()->listErrors(); ?>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card" style="background-color: #5C97FF;">

        <div class="card-body">

          <?php foreach ($publicacoes as  $publicacoes_item) : ?>

            <div class="card my-5">
              <div class="card-body">

                <div class='row align-middle text-center'>
                  <div class="col-md-10">
                    <h3 class="pb-2"><?= $publicacoes_item['titulo'] ?></h3>
                  </div>
                  <div class="col-md-2">
                    <i class="far fa-calendar-alt fa-2x" aria-hidden="true"></i>
                    <p class="text-autor"><?= $publicacoes_item['ano'] ?></p>
                  </div>


                </div>
                <div class='row align-middle text-center pl-3'>
                  <i class="fa fa-list-alt fa-2x" aria-hidden="true" style="width:40px; height:54px"></i>

                  <select name="categoria" class="other" tabindex="-1" disabled>
                    <?php foreach ($categorias as $categorias_item) : ?>
                      <option <?php if ($categorias_item['id'] == $publicacoes_item['categoria']) {
                                echo 'selected';
                              } ?>><?= $categorias_item['titulo'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class='row align-middle text-center pl-3'>
                  <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                  <p class="text-autor"><?= $publicacoes_item['autores'] ?></p>

                </div>
                <div class='row align-middle text-center pl-3'>
                  <i class="fas fa-book-open fa-2x" aria-hidden="true"></i>
                  <p class="text-autor"><?= $publicacoes_item['revistas'] ?></p>

                </div>

                <div class=''>
                  <h4 class="my-3">Conteudo</h4>
                  <div class="text-secondary">
                    <?= $publicacoes_item['conteudo'] ?>
                  </div>

                </div>




              </div>


              <div class="text-right pt-3 pb-4 pr-5 mr-3">
                <a href="/home/publicacao/<?= $publicacoes_item['id'] ?>" class="btn btn-success btn-add"><i class="fas fa-plus fa-2x"></i></a>

              </div>



            </div>
          <?php endforeach; ?>
          <?= $pager->links(); ?>
        </div>
      </div>
    </div>

  </div>

</div>