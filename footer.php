    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="footer__content">
    					<div class="footer__sitename">
    						2019 &copy; MedLand
    					</div>
    					<div class="footer__timeto">
    						Разработка сайта: <a href="https://timeto.top" target="_blank">TimeToTop</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <div class="callback__modal">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="callback__box">
            <div class="callback__close">
              <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="25px">
            </div>
            <div class="callback__title">
              Форма заказа
            </div>
            <div class="callback__line"></div>
            <div class="callback__form">
              <?php echo do_shortcode('[contact-form-7 id="8" title="Обратная связь"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal__bg"></div>
    <?php wp_footer(); ?>
</body>
</html>