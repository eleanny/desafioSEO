<?php get_header(); ?>
    
    
	<!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
        
        	<div class="nivo-slider nivoSlider">
                <?php query_posts('posts_per_page=2s&category_name=slider'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                  <?php the_post_thumbnail(array(400,400)); ?>
                <?php endwhile; endif; ?>
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
                 <?php query_posts('posts_per_page=3&category_name=servicios'); ?>
                 <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li>                        
                    <?php $iconos = ['pen','bulb','heart','phone','bubble','start']; ?>
                    <?php foreach($iconos as $icons): ?>
                    <?php if(get_post_meta(get_the_ID(), $icons,true)): ?>
                      <a href="<?php echo get_post_meta(get_the_ID(), $icons, true); ?>">
                            <span class="li_<?php echo $icons; ?>"></span>
                      </a>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p> 
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endwhile; endif;?>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
                <li class="webdesign"><a href="#">Web Design</a></li>
                <li class="graphicdesign"><a href="#">Graphic Design</a></li>
                <li class="artwork"><a href="#">Artwork</a></li>
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">
                <?php query_posts('posts_per_page=3&category_name=portafolio'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li data-id="id-<?php the_ID(); ?>" data-type="<?php echo get_the_tags()[0]->slug; ?>">
                    <a href="<?php echo get_the_post_thumbnail_url(null,'portafolio-full'); ?>" rel="prettyPhoto[portfolio]">
                        <?php the_post_thumbnail('portafolio-thumbnails'); ?>
                    </a>
                </li>
               <?php endwhile; endif; ?>
                
            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <!-- Profile -->
            <ul>
                <?php query_posts('posts_per_page=3&post_type=perfil'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li>
                	<?php the_post_thumbnail('avatar'); ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>     
                    <?php $redes = ['facebook','gplus','twitter','linkedin']; ?>
                    <?php foreach($redes as $red): ?>
                    <?php if(get_post_meta(get_the_ID(), $red,true)): ?>
                      <a href="<?php echo get_post_meta(get_the_ID(), $red, true); ?>">
                            <span class="icon-<?php echo $red; ?>"></span>
                      </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endwhile; endif;?>
                </li>
                
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                    <?php query_posts('posts_per_page=1&category_name=contacto'); ?>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <p><?php the_content(); ?></p>     
                    <?php endwhile; endif;?>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
    
<?php get_footer(); ?>




















