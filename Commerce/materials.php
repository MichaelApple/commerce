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
				      <img src="<?php bloginfo('template_url' ); ?>/images/carpathian1+.jpg" alt="carpathian" width="500" height="150" align="middle">
				      <div class="carousel-caption">
				        <h3>Якесь село</h3>
				        <p>The atmosphere in this village is awesome</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="<?php bloginfo('template_url' ); ?>/images/carpathian2.jpg" alt="carpathian" width="500" height="150">
				      <div class="carousel-caption">
				        <h3>Mountains</h3>
				        <p>Thank you, this one we won't forget.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="<?php bloginfo('template_url' ); ?>/images/carpathian3.jpg" alt="carpathian" width="500" height="150">
				      <div class="carousel-caption">
				        <h3>Threes</h3>
				        <p>Певний текст</p>
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


<div class="jumbotron">
        <a href="<?php echo home_url( ); ?>"><h1>Medical Site</h1></a>
        <h2><small>About rare questions...</small></h2>      
      </div>



		<div class="container">
			<h2 class="collection-title">Image Collection</h2>
			<div class="collections">
				<div class="collection-item-outer">
					<div class="collection-item">
						<img src="<?php bloginfo('template_url' ); ?>/images/florence-panorama.jpg" alt="List" width="300" height="">
						<div class="collection-text">
							<h3>List element item</h3>
							<p>Bla-bla-bla</p>
							<button>Read more...</button>
						</div>
					</div>
				</div>
				<div class="collection-item-outer">
					<div class="collection-item">
						<img src="<?php bloginfo('template_url' ); ?>/images/florence-panorama.jpg" alt="List" width="300" height="">
						<div class="collection-text">
							<h3>List element item Bla-bla-blaBla-bla-bla</h3>
							<p>Bla-bla-bla</p>
							<button>Read more...</button>
						</div>
					</div>
				</div>
				<div class="collection-item-outer">
					<div class="collection-item">
						<img src="<?php bloginfo('template_url' ); ?>/images/florence-panorama.jpg" alt="List" width="300" height="">
						<div class="collection-text">
							<h3>List element item</h3>
							<p>Bla-bla-bla</p>
							<button>Read more...</button>
						</div>
					</div>
				</div>
			</div>
		</div>


<br><br>
		<div class="container-fluid text-center bg-grey ">
				<h2>Певні статті</h2>
					<h4>Популярні питання</h4>
					<div class="row text-center">
						<div class="col-sm-4 ">
							<div class="thumbnail">
								<img src="<?php bloginfo('template_url'); ?>/images/01.jpg" alt="paris">
								<p><strong>Ви не були в Парижі?</p></strong>
								<p>Але наша компанія Вас туди доставить!</p>
							</div>	
						</div>
						<div class="col-sm-4 ">
							<div class="thumbnail">
								<img src="<?php bloginfo('template_url' ); ?>/images/02.jpg" alt="New York">
								<p><strong>Ви не були в Нью-Йорку?</p></strong>
								<p>Але наша компанія Вас туди доставить!</p>
							</div>	
						</div>
						<div class="col-sm-4 ">
							<div class="thumbnail">
								<img src="<?php bloginfo('template_url' ); ?>/images/03.jpg" alt="San Francisco">
								<p><strong>Ви не були в Сан-Франциско?</p></strong>
								<p>Але наша компанія не зможе Вас туди доправити, бо бензина сі скінчилась в Лоьндоні!</p>
							</div>	
						</div>
					</div>
			</div>	













<?php    /**
  * Displays a navigation menu
  * @param array $args Arguments
  */
  $args = array(
    'theme_location' => 'Menu',
    'menu' => '',
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse menu sticky',
    'container_id' => '',
    'menu_class' => 'nav navbar-nav sticky',
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