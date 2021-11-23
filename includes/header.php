<?php include 'config.php' ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="">
    <meta property="og:image:url" content="">
    <?php if (isset($title)) echo '<title>' . $title . '</title>'; else echo '<title>musaa sami portfolio</title>';?>
    <?php if (isset($description)) echo '<meta name="description" content="' . $description . '">'; else echo '<meta name=”description” content=”Portfolio of a web designer and developer based in Toronto.”>';?>
    <?php if (isset($keywords)) echo '<meta name="keywords" content="' . $keywords . '">'; else echo '<meta name=”keywords” content=”musaa sami design development designer developer portfolio”>';?>
    <link rel="canonical" href="<?php echo $canonical ?>">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- css files -->
    <?php
        echo "<link rel='stylesheet' type='text/css' href='../css/style.css" . $ver . "'>";
    ?>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e560fd7f6c.js"></script>

    <!-- Compressed CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous"> -->

    <!-- Compressed JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script> -->
  </head>

  <body>


    <div class="top-nav">
      <div class="nav-left">
      <?php if (isset($navLeft)) echo "<a href='" . $navLeft . "'><h3>musaa.</h3></a>"; else echo '<a href="/#work">
          <h3>musaa.</h3>
        </a>';?>
      </div>
      <div class="nav-right">
        <ul>
          <?php if (isset($menuBtn1)) echo '<li><a class="menu-btn" href="' . $menuBtn1[0] . '">' . $menuBtn1[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#work">work</a></li>';?>
          <?php if (isset($menuBtn2)) echo '<li><a class="menu-btn" href="' . $menuBtn2[0] . '">' . $menuBtn2[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#about">about</a></li>';?>
          <?php if (isset($menuBtn3)) echo '<li><a class="menu-btn" href="' . $menuBtn3[0] . '">' . $menuBtn3[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#contact">contact</a></li>';?>
          <?php if (isset($menuBtn4)) echo '<li><a class="menu-btn" href="' . $menuBtn4[0] . '">' . $menuBtn4[1] . '</a></li>'; else echo '';?>
          <?php if (isset($menuBtn5)) echo '<li><a class="menu-btn" href="' . $menuBtn5[0] . '">' . $menuBtn5[1] . '</a></li>'; else echo '';?>
          <?php if (isset($menuBtn6)) echo '<li><a class="menu-btn" href="' . $menuBtn6[0] . '">' . $menuBtn6[1] . '</a></li>'; else echo '';?>


        </ul>

        <a class="menu-icon"><i class="fas fa-bars fa-2x"></i></a>
      </div>

    </div>


    <div class="mob-menu">
      <a class="x-icon"><i class="fas fa-times fa-2x"></i></a>
      <ul>
        <?php if (isset($menuBtn1)) echo '<li><a class="menu-btn" href="' . $menuBtn1[0] . '">' . $menuBtn1[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#work">work</a></li>';?>
        <?php if (isset($menuBtn2)) echo '<li><a class="menu-btn" href="' . $menuBtn2[0] . '">' . $menuBtn2[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#about">about</a></li>';?>
        <?php if (isset($menuBtn3)) echo '<li><a class="menu-btn" href="' . $menuBtn3[0] . '">' . $menuBtn3[1] . '</a></li>'; else echo '<li><a class="menu-btn" href="index.php/#contact">contact</a></li>';?>
        <?php if (isset($menuBtn4)) echo '<li><a class="menu-btn" href="' . $menuBtn4[0] . '">' . $menuBtn4[1] . '</a></li>'; else echo '';?>
        <?php if (isset($menuBtn5)) echo '<li><a class="menu-btn" href="' . $menuBtn5[0] . '">' . $menuBtn5[1] . '</a></li>'; else echo '';?>
        <?php if (isset($menuBtn6)) echo '<li><a class="menu-btn" href="' . $menuBtn6[0] . '">' . $menuBtn6[1] . '</a></li>'; else echo '';?>
      </ul>
    </div>
