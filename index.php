
<?php 
   session_start();
   include("config/config.php");
   include("autoload.php");
   ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Shweta Store </title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
      <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/skel.css" />
      <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/style.css" />
      <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/style-desktop.css" />
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="<?php echo $config['base_url'] ?>assets/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/jquery.dropotron.min.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/skel.min.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/skel-layers.min.js"></script>
    <script src="<?php echo $config['base_url'] ?>assets/js/init.js"></script>

  </head>
  <body class="homepage">

    <header>
         <?php 
            $title = "Shweta Store";
            $metaD = "U think we make";
            include("includes/header.php");
            ?>
      </header>
      <section>
         <?php
            if (isset($_GET['action']) && !empty($_GET['action'])) {
                $file = "files/pages/" . $_GET['action'] . ".php";
                if (file_exists($file)) {
                    include($file);
                } else {
                    include("files/pages/home.php");
                }
            } else {
                include("files/pages/home.php");
            }
            ?>
      </section>
      <footer>
         <?php 
            include("includes/footer.php");
            ?>
      </footer>