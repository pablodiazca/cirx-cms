        <?php theme_include('header'); ?>
        <?php if(has_posts()) : while (posts()) : ?>
        <article>
        	
        	<section>
	        <h1><?php echo article_title();?></h1>
	        <h3><?php echo article_description(); ?></h3>
	        <p>By <a href="mailto:<?php echo user_authed_email(); ?>"><?php echo article_author(); ?></a> in <?php echo article_date(); ?></p>
        	</section>
        	<?php if(article_custom_field('image')) : ?>
        	<img src="<?php echo article_custom_field('image'); ?>">
        	<?php endif; ?>
	        <?php echo article_markdown(); ?>
	        
        </article>
        <?php endwhile; endif; ?>
        
        	<?php if(has_pagination()): ?>
            <section class="pagination">
        		<?php echo posts_prev(); ?>
	        	<?php echo posts_next(); ?>
        	</section>
        	<?php endif; ?>
        	
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="_scripts/plugins.js"></script>
        <script src="_scripts/main.js"></script>
   
        <?php theme_include('footer'); ?>
        
       