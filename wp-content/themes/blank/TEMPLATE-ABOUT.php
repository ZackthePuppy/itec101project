<?php
	/* Template Name: ABOUT */

	get_header();
?>
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
  <div class="jumbotron">
    <h1>About Drippin' Mayk</h1>      
    <p>This business started by Mayk with the help of his friends As time goes by, the Dripping Mayk becomes
    bigger and bigger. It is a sole proprietorship, and only the owner invested in his business. But when there are times 
    that the business is shorted, his friends always help him. On this day forward, the business keeps growing.</p>
  </div>   
</div>



<div class="container"> 
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
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/181759422_306847054287098_4819825441613642666_n.jpg" alt="Los Angeles" style = "width: 100%; height: 70%;">
      </div>

      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/181690525_231637188739914_1511915692249549346_n.jpg" alt="Los Angeles" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/181600728_765578334325895_3772006248740419423_n.jpg" alt="New York" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/183008315_374638140524073_3192594637813522930_n.jpg" alt="New York" style = "width: 100%; height: 70%;">
      </div>
    
      <div class="item">
        <img src="http://localhost/hatdoug/wp-content/uploads/2021/05/182966657_776104846603511_4604840561962334118_n.jpg" alt="New York" style = "width: 100%; height: 70%;">
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

<?php
 get_footer();
?>