<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <div class="container">
                <div class="main-body">


                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <?php if ($utilizadores['img']) : ?>
                                            <img src="/img/utilizadores/<?= $utilizadores['img'] ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                                        <?php else : ?>
                                            <img class="rounded-circle" width="150" height="150"" src=" /img/semfoto.jpg" alt="">
                                        <?php endif; ?>
                                        <div class="mt-3">
                                            <h4><?= $utilizadores['user'] ?></h4>
                                            <p class="text-secondary mb-1"><?= $utilizadores['categoria'] ?></p>
                                            <p class="text-muted font-size-sm"><?= $utilizadores['cidade'] ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <i class="fas fa-at fa-2x"></i>
                                        <span class="text-secondary"><?= $utilizadores['email'] ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <i class="fab fa-facebook fa-2x"></i>

                                        <span class="text-secondary"><?= $utilizadores['facebook'] ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <i class="fab fa-twitter fa-2x"></i>

                                        <span class="text-secondary"><?= $utilizadores['twitter'] ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <i class="fab fa-instagram fa-2x"></i>

                                        <span class="text-secondary"><?= $utilizadores['insta'] ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <i class="fab fa-youtube fa-2x"></i>

                                        <span class="text-secondary"><?= $utilizadores['youtube'] ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nome Completo</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= $utilizadores['nome'] ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Idade</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= $utilizadores['idade'] ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Telémovel</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= $utilizadores['contacto'] ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Entidade</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <?= $utilizadores['entidade'] ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="row gutters-sm">
                                <div class="col-sm-12 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="d-flex align-items-center mb-3">Sobre</h6>
                                            <div class="text-secondary">
                                                <?= $utilizadores['sobre'] ?>
                                            </div>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center pt-4">
                                <a href="/admin/utilizadores/editar/<?= $utilizadores['id'] ?>" class="btn btn-primary btn-edit">

                                    <i class="fas fa-edit"></i>

                                </a>
                                <a href="/admin/utilizadores/apagar/<?= $utilizadores['id'] ?>" class="btn btn-danger btn-edit" onClick="return confirm('Tem a certeza que quer Apagar o Utilizador <?= $utilizadores['user'] ?> ?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>