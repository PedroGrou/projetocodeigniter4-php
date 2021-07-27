<body class="login_wall">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-5 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.4); border-radius:30px">
          <div class="card-body p-0">

            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center pb-3">
                    <h1 class="h4 text-gray-900 mb-4">Bem vindo de Volta!</h1>
                  </div>
                  <form action="login/entrar" method="post">

                    <div class="form-group">
                      <label class="text-gray-900" for="user">Utilizador</label>
                      <input class="form-control login-form" type="input" name="user" />
                    </div>

                    <div class="form-group">
                      <label class="text-gray-900" for="password">Password</label>
                      <input class="form-control login-form" type="password" name="password" />
                    </div>


                    <input type="hidden" value="" name="id" />
                    <?= csrf_field(); ?>

                    <div class="form-group text-center mt-4">
                      <div class="login-form pt-4">
                        <button type="submit" name="submit" class="btn btn-info btn-mine"><i class="fas fa-check fa-2x"></i></button>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>