<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .bs-example{
        margin: 0px;
        margin-top: -35px;
        padding-top: 25px; 
        position: sticky;
        top: 0;
        border-radius: 10px;
        z-index: 100;
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="http://localhost/hatdoug/home/" class="navbar-brand">Dripping Mayk</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/hatdoug/home/" class="nav-item nav-link">Home</a>
                <a href="http://localhost/hatdoug/about/" class="nav-item nav-link">About</a>
                <a href="http://localhost/hatdoug/contact/" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link"></a>
            </div>
        </div>
    </nav>
</div>
