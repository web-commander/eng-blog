<!DOCTYPE html>
<html lang="ja" class="" >
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="ページの内容を表す文章">
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/custom.css">
    <?php wp_head(); 
    ?>
  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light rounded border-bottom">
      <div class= "container">
        <a href="https://one-ap-engineer.com/" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#folding-target" aria-controls="folding-target" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="folding-target">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link mr-3" href="https://one-ap-engineer.com/">HOME</a></li>
            <li class="nav-item dropdown mr-1">
              <a class="nav-link dropdown-toggle" href="" id="dropdown-service" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICE</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-service">
                <a class="dropdown-item" href="https://one-ap-engineer.com/web-work-consul">Webサイト制作</a>
                <a class="dropdown-item" href="https://one-ap-engineer.com/theme-work">WPテーマ制作</a>
                <a class="dropdown-item" href="https://one-ap-engineer.com/blog">Engineerブログ</a>
              </div>
            </li>
            <li class="nav-item mr-1"><a class="nav-link" href="https://one-ap-engineer.com/about-me">ABOUT ME</a></li>
            <li class="nav-item mr-1"><a class="nav-link mr-2" href="https://one-ap-engineer.com/blog">BLOG</a></li>
            <li class="nav-item mr-1"><a class="nav-link mr-2" href="https://one-ap-engineer.com/news">NEWS</a></li>
            <li class="nav-item mr-1"><a class="nav-link" href="https://one-ap-engineer.com/contact">CONTACT</a></li>
          </ul>
          <form role="search" method="get" id="searchform" action="https://one-ap-engineer.com" class="searchform form-inline my-3 my-md-0">
            <input type="search" id="search-form-1" class="form-control" placeholder="Search" aria-label="Search" value="" name="s" />
          </form>
        </div>
      </div>
    </nav>