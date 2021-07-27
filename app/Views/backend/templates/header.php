<body id="page-top">

  <div id="wrapper">
    <div class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar">
      <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="fixed-top navbar-nav sidebar sidebar-dark neopic accordion" id="accordionSidebar">

          <a class=" sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
              <img class="logo" src="/../img/icon.png" />
            </div>
            <div class="sidebar-brand-text mx-2">Stuff<sup>Publicações</sup></div>
          </a>

          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span></a>
          </li>
          <hr class="sidebar-divider">


          <div class="sidebar-heading">
            Website
          </div>

          <?php if (session()->get('logged_in')) : ?>


            <li class="nav-item">
              <a class="nav-link" href="/admin/publicacoes">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Publicações</span></a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/admin/categorias">
                <i class="fas fa-fw fa-list"></i>
                <span>Categorias</span></a>
            </li>
          <?php else : ?>


          <?php endif; ?>

          <li class="nav-item">
            <a class="nav-link" href="/sobre">
              <i class="fas fa-info-circle"></i>
              <span> Sobre</span></a>
          </li>


          <hr class="sidebar-divider">


          <?php if (session()->get('admin_in')) : ?>
            <div class="sidebar-heading">
              Sistema
            </div>

            <li class="nav-item">
              <a class="nav-link" href="/admin/utilizadores">
                <i class="fas fa-users"></i>
                <span>Utilizadores</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
          <?php else : ?>

          <?php endif; ?>




          <div class="login_user ">
            <?php if (session()->get('logged_in')) : ?>

              <div id="user-profile-wrapper">
                <div id="user-profile-container">
                  <div id="user-profile-content">
                    <div class="user-profile-section">
                      <i class="fas fa-user-circle user-logo"></i>
                      <div class="user-profile-value">
                        <div class="col-md-6">
                          <div title="<?= session()->get('user') ?>" class="profile-value user-profile-value-username" style="font-size:16px;font-weight:500;padding-bottom:2px">
                            <?= session()->get('user') ?>
                          </div>
                        </div>

                        <div class="col-md-2 text-right pt-1 ">
                          <a class="col-md-2 text-right log" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i> </a>
                        </div>




                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <li class="nav-item">



                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>

              </li>
            <?php else : ?>
              <div class="login_user text-white">
                <li class="text-center pt-3">
                  <a class="nav-link log" href="/login">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span></a>
                </li>
              </div>

            <?php endif; ?>

          </div>

        </div>

      </ul>
    </div>

    <div id="content-wrapper" class="d-flex flex-column" style="background-color: #5C97FF;">


      <div id="content">