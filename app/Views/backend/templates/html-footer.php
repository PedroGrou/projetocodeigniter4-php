<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terminar Sessão?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Caso pretenda terminar sessão, pressione no botão <b> <i class="fas fa-power-off"></i> </b> para sair da sessão.</div>
      <div class="text-center pb-4">
        <button type="button" data-dismiss="modal" class="btn btn-danger btn-model"><i class="fas fa-times"></i></button>

        <a href="<?= base_url('login/logout') ?>" class="btn btn-success btn-model"><i class="fas fa-power-off"></i></a>

      </div>
    </div>
  </div>
</div>


<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="/js/sb-admin-2.min.js"></script>

</body>

</html>