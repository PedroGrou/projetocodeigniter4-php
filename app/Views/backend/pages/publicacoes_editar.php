<div class="container-fluid">


    <?php if ($msg) : ?>
        <div class="p-3 my-3 alert-info">
            <?= $msg ?>
        </div>

    <?php endif; ?>

    <div class="p-3 my-3 text-danger">
        <?= \Config\Services::validation()->listErrors(); ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editar Publicações</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/publicacoes/gravar') ?>" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input class="form-control" type="input" name="titulo" value="<?= $publicacoes['titulo'] ?>" />
                                </div>


                                <div class="form-group">
                                    <label for="categoria">Tipo de Publicação</label>
                                    <div class="form-group">
                                        <select name="categoria" class="form-control" tabindex="-1">
                                            <option value="">Escolha um Tipo de Publicação</option>
                                            <?php foreach ($categorias as $categorias_item) : ?>
                                                <option value="<?= $categorias_item['id'] ?>" <?php if ($categorias_item['id'] == $publicacoes['categoria']) {
                                                                                                    echo 'selected';
                                                                                                } ?>><?= $categorias_item['titulo'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="indexbase">Indexação Base</label>
                                    <input class="form-control" type="input" name="indexbase" value="<?= $publicacoes['indexbase'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="numautor">Número de Autores</label>
                                    <input class="form-control" type="number" name="numautor" value="<?= $publicacoes['numautor'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="autores">Nome dos Autores</label>
                                    <input class="form-control" type="input" name="autores" value="<?= $publicacoes['autores'] ?>" />
                                </div>



                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="revistas">Revista, Conferência ou Editora</label>
                                    <input class="form-control" type="input" name="revistas" value="<?= $publicacoes['revistas'] ?>" />
                                </div>



                                <div class="form-group">
                                    <label for="volume">Volume</label>
                                    <input class="form-control" type="number" name="volume" value="<?= $publicacoes['volume'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="volume">Número</label>
                                    <input class="form-control" type="number" name="numero" value="<?= $publicacoes['numero'] ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="paginas">Páginas</label>
                                    <input class="form-control" type="number" name="paginas" value="<?= $publicacoes['paginas'] ?>" />
                                </div>


                                <div class="form-group">
                                    <label for="ano">Ano de Publicação</label>
                                    <input class="form-control" type="number" name="ano" value="<?= $publicacoes['ano'] ?>" />
                                </div>


                            </div>
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="conteudo">Conteudo</label>
                                    <textarea name="conteudo" class="form-control" rows="10" value="<?= $publicacoes['conteudo'] ?>"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="img">Imagem</label>
                                    <input type="file" name="img" />
                                </div>

                                <div class="text-center pt-4 pb-3">
                                    <button type="submit" name="submit" class="btn btn-info btn-save"><i class="fas fa-check fa-2x"></i></button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" value="<?= $publicacoes['id'] ?>" name="id" />

                        <?= csrf_field(); ?>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>



<script src="/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        language: 'pt-PT',
        selector: 'textarea',
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools contextmenu colorpicker textpattern code',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
        image_advtab: true,
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>