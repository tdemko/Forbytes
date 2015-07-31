<header id="header">
	<div class="header-background">

	</div>
	<div class="header-content container">
		<div class="row">
			<div class="col-xs-12">
				<div class="logo">
					<a class="clearfix" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/app/common/logo.svg" alt="forbytes" />
						
						<h1>Forbytes</h1>
					</a>					
				</div>
			    <nav class="desktop">
			    	<div class="humb-menu">
			    		<div class="hm-line"></div>
			    		<div class="hm-line"></div>
			    		<div class="hm-line"></div>
			    	</div>
				    <ul>
					    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
					   <!-- <li class="search">
					    	<span title="Currently in development" class="glyphicon glyphicon-search"></span>
					    </li>-->
				    </ul>
				    <div class="clearfix"></div>
			    </nav>
                <nav class="mobile">
                    <ul>
					    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
				    </ul>
                </nav>
			</div>
		</div>
	</div>
</header>

