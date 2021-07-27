<div class="jumbotron p-3 p-md-5 bg-dark newpub">
    <div class="col-md-6 p-4 opac">
        <h1 class="display-4 font-italic">Publicações</h1>
        <p class="lead my-3">Nesta secção podemos visualizar todas as publicações que o website tem para si, pode editar, apagar ou criar uma nova, comece já</p>

    </div>
    <div class="col-md-6 pt-4">
        <a href="/admin/publicacoes/add" class="btn btn-info" style="border-radius:40px; color:#fff"><i class="fas fa-plus"></i> Adicionar Publicação</a>

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
                                <th><span>Publicação</span></th>
                                <th><span>Autor</span></th>
                                <th><span>Criado</span></th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($publicacoes as $publicacoes_item) : ?>
                                <tr role="row" class="odd">

                                    <td class="align-middle bg-white"><?= $publicacoes_item['titulo'] ?></td>
                                    <td class="align-middle bg-white"><?= $publicacoes_item['autores'] ?></td>
                                    <td class="align-middle bg-white"><?= date("d-m-Y H:i", strtotime($publicacoes_item['created_at'])); ?></td>
                                    <td class="bg-white text-center">

                                        <a href="/home/publicacao/<?= $publicacoes_item['id'] ?>" class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>

                                        <a href="/admin/publicacoes/editar/<?= $publicacoes_item['id'] ?>" class="table-link">
                                            <span class="fa-stack">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-edit fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="/admin/publicacoes/apagar/<?= $publicacoes_item['id'] ?>" class="table-link danger" onClick="return confirm('Tem a certeza que quer Apagar a Publicação <?= $publicacoes_item['titulo'] ?> ?');">
                                            <span class="fa-stack">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-trash fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>


                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <?= $pager->links(); ?>
                </div>
            </div>
        </div>



        </>

    </div>