<?php get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="color: white;">Your One-stop Vape Shop!</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/wp1843398.jpg" alt="Los Angeles" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/what_is_in_vape_juice_ingredients_explained_2048x.jpg" alt="Chicago" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/vape-concept-smoke-clouds-vape-liquid-bottles-dark-background-light-effects-useful-as-background-vape-advertisement-115497538.jpg" alt="New York" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/photo-1530745342582-0795f23ec976.jpg" alt="New York" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/photo-1524653736724-8490ee06859d.jpg" alt="New York" style = "width: 100%; height: 700px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


<?php get_footer();?>