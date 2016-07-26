 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>

$(document).ready(function () {

    var menu = $('.menu');
    var origOffsetY = menu.offset().top;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.menu').addClass('sticky');
            $('.content').addClass('menu-padding');
        } else {
            $('.menu').removeClass('sticky');
            $('.content').removeClass('menu-padding');
        }


    }

    document.onscroll = scroll;

});


</script>


<?php wp_head(); ?>

</head>
<body>

   

<header class="header">

  <div class="mid" >
    
  </div>
  

    <img src="<?php bloginfo('template_url' ); ?>/images/06.jpg" style="float: right; margin-top: 55px;">
    
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php bloginfo('template_url' ); ?>/images/Palms.jpg" alt="carpathian" >
              <div class="carousel-caption">
                <a href="<?php echo home_url( ); ?>"><h1>Medical Site</h1><h2>About rare questions...</h2></a>
                
              </div>
            </div>

            <div class="item">
              <img src="<?php bloginfo('template_url' ); ?>/images/Sea.jpg" alt="carpathian" >
              <div class="carousel-caption">
                <a href="<?php echo home_url( ); ?>"><h1>Medical Site</h1><h2>About rare questions...</h2></a>
                
              </div>
            </div>

            <div class="item">
              <img src="<?php bloginfo('template_url' ); ?>/images/Rocks.jpg" alt="carpathian" >
              <div class="carousel-caption">
                <a href="<?php echo home_url( ); ?>"><h1>Medical Site</h1><h2>About rare questions...</h2></a>
                
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>

      
            
      
    
</header>
  
  <!--
  <nav class="page-navigation">
    <div class="container">
      <ul>
        <li><a href="<?php echo home_url( ); ?>">Home</a></li>
        <li><a href="#">About<a></li>
        <li><a href="#">Contacts<a></li>
      </ul>

      <form class="login">
        <input type="text" placeholder="Login" required>
        <input type="password" placeholder="Password">
        <input type="submit" value="Sign in">
      </form>
    </div>
  </nav>

-->

<nav class="navbar navbar-inverse ">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>">Medicine for you</a>
      </div>
      
<?php    /**
  * Displays a navigation menu
  * @param array $args Arguments
  */
  $args = array(
    'theme_location' => 'Menu',
    'menu' => '',
    'container' => false,
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'nav navbar-nav',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id = "%1$s" class = "nav navbar-nav">%3$s</ul>',
    'depth' => 0,
    'walker' => ''
  );

  wp_nav_menu( $args ); ?>
 <!--
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo home_url( ); ?>">Home</a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contacts</a></li>
        </ul>

      </div>
      -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="<?php wp_login ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
  </nav>


<hr>




