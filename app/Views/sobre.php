<div class="jumbotron p-3 p-md-5 text-white bg-dark newsob">
  <div class="col-md-6 p-4 ">
    <h1 class="display-4 font-italic">Sobre</h1>
    <p class="lead my-3">Secção que fala um pouco sobre o desenvolvimento do website, o porquê da sua criação, qual o seu objetivo e quem o desenvolveu</p>

  </div>
  <div class="col-md-6 pt-4">

  </div>

</div>


<div class="container-fluid">

  <div class="row">




  </div>



  <div class="p-3 my-3 text-danger">
    <?= \Config\Services::validation()->listErrors(); ?>
  </div>

  <div class="bg-white p-5" style="border-radius: 20px;">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-lg-1"><i class="fas fa-chart-bar fa-4x mb-4"></i>
        <h2 class="font-weight-light">Projeto</h2>
        <p class="font-italic text-muted mb-4">Este website foi desenvolvido em CodeIgniter 4, foi proposto pelo professor de Multimédia III, professor Pedro Silva, a elaboração de um website que visa Criar, Editar e Apagar publicações</p>


      </div>
      <div class="col-md-6 order-2 order-lg-1">
        <img class="sobre" src="/../img/sobre4.jpg" />
      </div>
    </div>

  </div>

  <div class="bg-white p-5 mt-4" style="border-radius: 20px;">
    <div class=" row align-items-center">
      <div class="col-md-6 order-2 order-lg-1">
        <img class="sobre" src="/../img/sobre3.jpg" />
      </div>
      <div class="col-md-6 order-2 order-lg-1 text-right"><i class="fas fa-leaf fa-4x mb-4"></i>
        <h2 class="font-weight-light">Criação</h2>
        <p class="font-italic text-muted mb-4">Foi usado o CodeIgniter 4 para a sua criação, tendo também usado o bootstrap, mais propriamente o Start Bootstrap - SB Admin 2 v4.0.7 para a parte de css e javascript, foi também utilizado o fontawsome para os icones e o tinymce para a elaboração de texto</p>

      </div>

    </div>

  </div>


  <div class="bg-white p-5 mt-4 text-center" style="border-radius: 20px;">
    <div class=" row align-items-center">
      <div class="col-md-6 order-2 order-lg-1"><i class="fas fa-user fa-4x mb-4"></i>
        <h2 class="font-weight-light">Equipa</h2>
        <p class="font-italic text-muted">A equipa que atualmente sou só eu, qualquer duvida as minhas informações estão aqui indicadas</p>
      </div>
      <div class="col-md-6 order-2 order-lg-1">
        <div class="text-center">

          <div class="bg-white rounded"><img src="./../img/mine.jpg" alt="" width="100" style="height: 150px; width:150px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Pedro Gonçalves</h5>
            <span class="small  text-muted">CEO - Fundador</span><br>
            <span class="small text-muted">Número de Aluno - 20140873</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>