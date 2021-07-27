<?php if ($msg) : ?>
  <div class="p-3 my-3 alert-info">
    <?= $msg ?>
  </div>

<?php endif; ?>

<div class="p-3 my-3 text-danger">
  <?= \Config\Services::validation()->listErrors(); ?>
</div>

<div class="col-md-12 ">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Adicionar Utilizadores</h6>
    </div>
    <div class="card-body">
      <form action="<?= base_url('admin/utilizadores/gravar') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="user">Utilizador</label>
              <input class="form-control" type="input" name="user" />
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" />
            </div>

            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input class="form-control" type="input" name="nome" />
            </div>

            <div class="form-group">
              <label for="idade">Idade</label>
              <input class="form-control" type="number" name="idade" />
            </div>

            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input class="form-control" type="input" name="cidade" />
            </div>

            <div class="form-group">
              <label for="categoria">Categoria</label>
              <input class="form-control" type="input" name="categoria" />
            </div>

            <div class="form-group pt-3">
              <label for="img">Imagem</label>
              <input type="file" name="img" />
            </div>


          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="contacto">Contacto</label>
              <input class="form-control" type="number" name="contacto" />
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="input" name="email" />
            </div>

            <div class="form-group">
              <label for="entidade">Entidade</label>
              <input class="form-control" type="input" name="entidade" />
            </div>

            <div class="form-group">
              <label for="sobre">Sobre</label>
              <textarea name="sobre" class="form-control" rows="5"></textarea>
            </div>

          </div>






          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend bg-white">
                      <span class="input-group-text bg-white"><i class="fab fa-facebook-f"></i></span>
                    </div>
                    <input class="form-control" placeholder="Facebook URL" type="input" name="facebook" />
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend bg-white">
                      <span class="input-group-text bg-white"><i class="fab fa-twitter"></i></span>
                    </div>
                    <input class="form-control" placeholder="Twitter URL" type="input" name="twitter" />
                  </div>
                </div>
              </div>


              <div class="col-md-3">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend bg-white">
                      <span class="input-group-text bg-white"><i class="fab fa-instagram"></i></span>
                    </div>
                    <input class="form-control" placeholder="Instagram URL" type="input" name="insta" />
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend bg-white">
                      <span class="input-group-text bg-white"><i class="fab fa-youtube"></i></span>
                    </div>
                    <input class="form-control" placeholder="Youtube URL" type="input" name="youtube" />
                  </div>
                </div>
              </div>

            </div>
            <div class="text-center pt-4 pb-3">
              <button type="submit" name="submit" class="btn btn-info btn-save"><i class="fas fa-check fa-2x"></i></button>

            </div>
          </div>
          <input type="hidden" value="" name="id" />


          <?= csrf_field(); ?>

      </form>
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