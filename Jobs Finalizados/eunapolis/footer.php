    <?php $home = get_template_directory_uri(); ?>

    <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-12 sitemap">
                    <div class="col-md-2">
                      <ul>
                        <li>
                          <a href="#">EUNAPOLIS</a>
                          <ul>
                            <li><a href="#">HISTÓRIA</a></li>
                            <li><a href="#">SÍMBOLOS</a></li>
                            <li><a href="#">PONTOS TURÍSTICOS</a></li>
                            <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                            <li><a href="#">REGIÃO METROPOLITANA</a></li>
                            <li><a href="#">PONTOS TURÍSTICOS</a></li>
                            <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                            <li><a href="#">REGIÃO METROPOLITANA</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                      <ul>
                        <li>
                          <a href="#">CIDADÃO</a>
                          <ul>
                            <li><a href="#">HISTÓRIA</a></li>
                            <li><a href="#">SÍMBOLOS</a></li>
                            <li><a href="#">PONTOS TURÍSTICOS</a></li>
                            <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                            <li><a href="#">REGIÃO METROPOLITANA</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul>
                      <li>
                        <a href="#">EMPRESA</a>
                        <ul>
                          <li><a href="#">HISTÓRIA</a></li>
                          <li><a href="#">SÍMBOLOS</a></li>
                          <li><a href="#">PONTOS TURÍSTICOS</a></li>
                          <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                          <li><a href="#">REGIÃO METROPOLITANA</a></li>
                        </ul>
                    </li>
                  </ul>
                </div>
                    <div class="col-md-2">
                      <ul>
                        <li>
                          <a href="#">PUBLICAÇÕES LEGAIS</a>
                          <ul>
                            <li><a href="#">HISTÓRIA</a></li>
                            <li><a href="#">SÍMBOLOS</a></li>
                            <li><a href="#">PONTOS TURÍSTICOS</a></li>
                            <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                            <li><a href="#">REGIÃO METROPOLITANA</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul>
                      <li>
                        <a href="#">TURISTA</a>
                        <ul>
                          <li><a href="#">HISTÓRIA</a></li>
                          <li><a href="#">SÍMBOLOS</a></li>
                          <li><a href="#">PONTOS TURÍSTICOS</a></li>
                          <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                          <li><a href="#">REGIÃO METROPOLITANA</a></li>
                          <li><a href="#">HISTÓRIA</a></li>
                          <li><a href="#">SÍMBOLOS</a></li>
                          <li><a href="#">PONTOS TURÍSTICOS</a></li>
                          <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                          <li><a href="#">REGIÃO METROPOLITANA</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <ul>
                    <li>
                      <a href="#">SERVIDOR</a>
                      <ul>
                        <li><a href="#">HISTÓRIA</a></li>
                        <li><a href="#">SÍMBOLOS</a></li>
                        <li><a href="#">PONTOS TURÍSTICOS</a></li>
                        <li><a href="#">EUNAPOLIS EM DADOS</a></li>
                        <li><a href="#">REGIÃO METROPOLITANA</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

          <div class="foot-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 foot">
                        <a href="#" class="logo-foot">
                          <img class="img-responsive" src="<?=$home?>/assets/images/logo_pme.png" alt="" />
                        </a>
                        <address>
                                <span>Prefeitura Municipal de Eunapolis<br>Fone: (73) 0000-0000</span>
                                <span>Av. x, 403<br> Centro - Eunapços/BA - CEP 8xxxxxxx</span>
                                <span>Atendimento ao Cidadão<br> das 13h às 19h(Horário de Verão)</span>
                        </address>
                        <div class="faixa-color faixa-foot">
                						<span class="fx-cinza"></span>
                						<span class="fx-amarelo"></span>
                						<span class="fx-verde"></span>
                						<span class="fx-azul"></span>
                						<span class="fx-vermelho"></span>
    					          </div>
                    </div>
                </div>
            </div>
          </div>
    </footer>


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= $home ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
      $(document).ready(function(){        
        $('.wdi_load_more_text').html('Ver mais');                        
      });                                 
    </script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?= $home ?>/js/bootstrap.min.js"></script>
    <script src="<?= $home ?>/js/main.js"></script>

    <?php wp_footer();?>
</body>

</html>
