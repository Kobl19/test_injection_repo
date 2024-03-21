<footer class="footer">
      <div class="_container">
        <div class="footer__body">
          <div class="footer__row footer__row_jcsb">
            <div class="footer__col-2">
              <div class="footer__logo">
                    <div class="logo"><picture><source srcset="<?php  bloginfo('template_url')?>/assets/img/logo.webp"type="image/webp"><img class="logo__image" src="<?php  bloginfo('template_url')?>/assets/img/logo.png" alt="logo"></picture>
                    </div>
              </div>
            </div>
            <div class="footer__col-6">
              <div class="footer__menu">
                <ul class="menu menu_jcsb menu_footer">
                  <div class="menu__item"><a class="menu__link" href="#programm-section">Програми</a></div>
                  <div class="menu__item"><a class="menu__link" href="#gallery-section">Фотогалерея</a></div>
                  <div class="menu__item"><a class="menu__link" href="#trainers-section">Тренери</a></div>
                  <div class="menu__item"><a class="menu__link" href="#contacts-section">Контакти</a></div>
                </ul>
              </div>
            </div>
            <div class="footer__col-2">
              <div class="footer__social">
                <ul class="social social_jcfe">
                  <li class="social__item"><a class="social__link" href="https://www.facebook.com/cheerlika.com.ua">
                      <svg class="svg-facebook_negative-dims">
                        <use xLink:href="<?php  bloginfo('template_url')?>/assets/img/icons/icons-simple.svg#facebook_negative"></use>
                      </svg></a></li>
                  <li class="social__item"><a class="social__link" href="https://www.instagram.com/black.mamba.cheer">
                      <svg class="svg-instagram_negative-dims">
                        <use xLink:href="<?php  bloginfo('template_url')?>/assets/img/icons/icons-simple.svg#instagram_negative"></use>
                      </svg></a></li>
                  <li class="social__item"><a class="social__link" href="https://www.youtube.com/channel/UCpxiesQUPBb1H-rCNR9vU-w">
                      <svg class="svg-youtube_negative-dims">
                        <use xLink:href="<?php  bloginfo('template_url')?>/assets/img/icons/icons-simple.svg#youtube_negative"></use>
                      </svg></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div id="modal2" class="modal_custom" style=" height: auto">

    </div>
    </footer>
  </div>

  <?php wp_footer();?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#modal2').append('<div class="content"><iframe width="960" height="540" src="https://www.youtube.com/embed/GbwcjrT1JrU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
    });

</script>
<script>
    jQuery(".modal_custom").each( function(){
        jQuery(this).wrap('<div class="overlay"></div>')
    });
    jQuery(".open-modal").on('click', function(e){
        jQuery(".overlay").removeClass("open");
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = jQuery(this),
            modal = jQuery($this).data("modal");

        jQuery(modal).parents(".overlay").addClass("open");
        setTimeout( function(){
            jQuery(modal).addClass("open");
        }, 350);

        jQuery(document).on('click', function(e){
            var target = jQuery(e.target);

            if (jQuery(target).hasClass("overlay")){
                jQuery(target).find(".modal_custom").each( function(){
                    jQuery(this).removeClass("open");
                });
                setTimeout( function(){
                    jQuery(target).removeClass("open");
                }, 350);
            }

        });

    });

    jQuery(".close-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = jQuery(this),
            modal = jQuery($this).data("modal");

        jQuery(modal).removeClass("open");
        setTimeout( function(){
            jQuery(modal).parents(".overlay").removeClass("open");
        }, 350);

    });
</script>
</body>
</html>
