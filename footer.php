   <?php wp_footer(); 
   ?>
   <!-- 
  <footer class="blog-footer">
    <div class="footer-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-left">
            <h4>左メニュー</h4>
            <?php wp_nav_menu( array(
                      'theme_location'=>'footer-menu-left', 
                      'container'     =>'', 
                      'menu_class'    =>'footer-menu-left',
                      'items_wrap'    =>'<ul class="footer-menu footer-left">%3$s</ul>'));
              ?>
          </div>
          <div class="col-md-4 text-left">
            <h4>まんなかメニュー</h4>
            <?php wp_nav_menu( array(
                      'theme_location'=>'footer-menu-center', 
                      'container'     =>'', 
                      'menu_class'    =>'footer-menu-center',
                      'items_wrap'    =>'<ul class="footer-menu footer-center">%3$s</ul>'));
              ?>
          </div>
          <div class="col-md-4 text-left">
            <h4>みぎめにゅー</h4>
            <?php wp_nav_menu( array(
                      'theme_location'=>'footer-menu-right', 
                      'container'     =>'', 
                      'menu_class'    =>'footer-menu-right',
                      'items_wrap'    =>'<ul class="footer-menu footer-right">%3$s</ul>'));
              ?>
          </div> 
        </div>
      </div>
    </div>
    <p>© 2019  <a href="">とあるEngineer</a></p>
  </footer>
   -->
    <div class="top-footer-area top07">
      <div class="container">
        <div class="row my-5 top-item-description-white text-left">
          <div class="col-md-4">
            <h3>ADRESS</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/gio-japan.svg" class="my-4">
            <p>日本のどこか</p>
          </div>
          <div class="col-md-4">
            <h3>MORE INFO</h3>
            <div class="my-4">
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/about-me" class="text-light">サイト管理者について</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/terms-of-service" class="text-light">利用規約</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/about-personal-info" class="text-light">個人情報の取り扱いについて</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/law" class="text-light">特定商取引法にもとづく表記</a></p>
              <p class="icon-file-white"><a href="https://one-ap-engineer.com/contact" class="text-light">お問い合わせ</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <h3>TWEET</h3>
            <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/web_command?ref_src=twsrc%5Etfw">Tweets by web_command</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
        <div class="row my-2 top-item-description-white">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="text-center">
              <p class="">© 2019 OneEngineer</p>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  <!-- javascript -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/static/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/static/js/custom.js'></script>
</body>
</html>