        <?php theme_include('header'); ?>
  
        <article>
        	
        	<section>
	        <h1><?php echo page_title(); ?></h1>
	        <h3><?php echo page_custom_field('subheading-page'); ?></h3>
        	</section>
        	
	        <?php echo page_content(); ?>
        </article>

        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="_scripts/plugins.js"></script>
        <script src="_scripts/main.js"></script>
   
        <?php theme_include('footer'); ?>
        
       