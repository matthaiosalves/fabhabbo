<section class="military-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="military-search--image-board">
          <h5>Buscar Militar</h5>
        </div>

        <form action="">
          <input type="text" placeholder="Buscar por militar...">
          <button>
            <img class="button--image-search" src="<?php echo get_template_directory_uri(); ?>/assets/img/Military-Search/frank.png" alt="Procura militar">
          </button>
        </form>

        <div class="military-search--researching-military d-none">
          <div class="military-search--arrow-up"></div>

          <!-- Não Encontrado -->
          <div class="card card--researching-military">
            <div class="military-search--circle"></div>
            <div class="military-search--result">
              <h3>Não encontrado</h3>
            </div>
          </div>

          <!-- Encontrado -->
          <div class="card card-military-search--search-result">
            <div class="military-search--circle"></div>
            <div class="military-search--result">
              <h3>Matthaios</h3>
              <span><strong>Patente: </strong>Demente-Coronel</span>
              <span><strong>Promovido por: </strong></span>
              <span><strong>Promoção: </strong></span>
              <span><strong>Status: </strong></span>
              <span><strong>Alistamento: </strong></span>
            </div>
          </div>

          <!-- Pesquisando -->
          <div class="card card--researching-military">
            <div class="military-search--circle" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Military-Search/pesquisa_avatar.png');"></div>
            <div class="military-search--result">
              <h3>Buscando Militar...</h3>
              <img class="military-search--image-loading" src="<?php echo get_template_directory_uri(); ?>/assets/img/Military-Search/loading.gif" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>